# Natas Level 10

- Username: natas10
- URL: http://natas10.natas.labs.overthewire.org

## Solution

To solve Natas Level 10:

- **Inspect the Source Page:** From the provided source code of this page, we can identify a common injection vulnerability. The `passthru()` function is PHP is used to execute shell commands, and it directly passes the user input (`needle`) to the `grep` command without proper sanitization.

  1. The `needle` parameter is vulnerable to command injection. By appending semicolon (`;`), an additional command (`cat /etc/natas_webpass/natas0`), and `#` to comment out the rest of the `grep` command, we can execute arbitrary commands on the server

  2. To retrieve the password for the next level, we can inject the following commands:

     - ```bash
         ; cat /etc/natas_webpass/natas0 #
       ```

  3. Submit the input, and the password for Natas level 10 will be displayed.

  - **Password for Natas Level 10:** `t7I5VHvpa14sJTUGV0cbEsbYfFP2dmOu`

### Next Level

[Level 10 → Level 11](https://github.com/nimodb/natas-challenge-solver/tree/main/natas11)
