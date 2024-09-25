# Natas Level 8

- Username: natas8
- URL: http://natas8.natas.labs.overthewire.org

## Solution

To solve Natas Level 8:

- **Inspect the Source Page:** From the provided source code of this page, we see that the hint in the source code says "`<!-- hint: password for webuser natas8 is in /etc/natas_webpass/natas8 -->`" and The website dynamically including files based on the `page` parameter:

  ```diff
  index.php?page=home
  index.php?page=about
  ```

  This is a potential file inclusion vulnerability, specifically a directory traversal vulnerability, where we can manipulate the page parameter to include arbitrary files.

  1. **Exploiting Directory Traversal:** The goal is to traverse to the `/etc/natas_webpass/natas8` file by manipulating the `page` parameter in the URL.

  2. So Let's modify the URL like this:

  ```bash
  http://natas7.natas.labs.overthewire.org/index.php?page=/etc/natas_webpass/natas8
  ```

  3. When you load the modified URL, the content of the file `/etc/natas_webpass/natas8` will be displayed, revealing the password.

  - **Password for Natas Level 8:** `xcoXLmzMkoIP9D7hlgPlh9XD7OgLAe5Q`

### Next Level

[Level 8 → Level 9](https://github.com/nimodb/natas-challenge-solver/tree/main/natas9)
