# Natas Level 6

- Username: natas6
- URL: http://natas6.natas.labs.overthewire.org

## Solution

To solve Natas Level 6:

- **Analyze the restriction:** The page display a message "Access disallowed. You are not logged in," suggesting that we need to manipulate a session or cookie to appear logged in.

  1. **Examine the page:** Open the developer tools by pressing `F12` or inspect to check if any cookies or session data are being used for login status.

  2. **Check for cookies:** By examining the cookies in the browser, you may notice that the page uses a session cookies. Altering the cookie value might allow us to bypass the login restriction.

     - In the developer tools panel, navigate to the "Application" tap (or "Storage" in Firefox).
     - On the left-hand sidebar, look for "Cookies".

  3. Find the cookie for **natas5.natas.labs.overthewire.org**:
     - Under "Cookies", select the domain **natas5.natas.labs.overthewire.org**. This will display all cookies set for that page.
  4. Look for the session cookie:

     - You should see a cookie named something like `loggedin`. This is the session identifier, and it's what the server uses to track whether you are logged in or not.

     ```makefile
       Name: loggedin
       Value: abcdef1234567890abcdef1234567890
       Domain: natas5.natas.labs.overthewire.org
       Path: /
     ```

  5. Manipulate the session cookie:
     - Use browser developer tools or Curl to manipulate the cookie.
     - The server likely expects the `loggedin` to have a certain value to indicate that you're logged in.
     - For example, try setting the value of the cookie to something like `"loggedin"` or `"admin"` or `1` and see if the page gives you access.
     ```bash
     curl -b "loggedin=1" http://natas5.natas.labs.overthewire.org/ --user natas5:0n35PkggAPm2zbEpOU802c0x0Msn1ToK
     ```

  - **Password for Natas Level 6:** `0RoJwHdSKWFTYR5WuiAewauSuNaBXned`

### Next Level

[Level 6 → Level 7](https://github.com/nimodb/natas-challenge-solver/tree/main/natas7)
