# Natas Level 4

- Username: natas4
- URL: http://natas4.natas.labs.overthewire.org

## Solution

To solve Natas Level 4:

- **Investigate the page source:** The page says "There is nothing on this page" and hints `<!-- No more information leaks!! Not even Google will find it this time... -->`, suggesting that hidden information may not be indexed by search engines but could be accessible.

  1. **Inspect robots.txt:** Many websites include a `robots.txt` file to instruct search engines on which parts of the site to index or ignore. Access http://natas3.natas.labs.overthewire.org/robots.txt to see if there any hidden files.

  2. **Openthe robots.txt:** It contains:

  ```javascript
  User-agent: *
  Disallow: /s3cr3t/
  ```

  3. **Access the hidden directory:** Navigation to http://natas3.natas.labs.overthewire.org/s3cr3t/

  4. **Find the password:** Inside the `/s3cr3t/` directory, there are multiply files. Open. http://natas3.natas.labs.overthewire.org/s3cr3t/users.txt

  - **Password for Natas Level 4:** `QryZXc2e0zahULdHrtHxzyYkj59kUxLQ`

### Next Level

[Level 4 → Level 5](https://github.com/nimodb/natas-challenge-solver/tree/main/natas5)
