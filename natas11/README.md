# Natas Level 11

- Username: natas11
- URL: http://natas11.natas.labs.overthewire.org

## Solution

To solve Natas Level 11:

- **Inspect the Source Page:** The source code introduces a filter that blocks characters such as `;`, `|`, and `&` to prevent command injection. However, it does not block the use of wildcards like `.` or `*`.

  1. The filter prevents the use of some special characters, but we can use the wildcard `.` to read files.
  2. To retrieve the password for Natas Level 12, we inject the following command into the input field:
     - ```bash
       . /etc/natas_webpass/natas11 #
       ```
  3. Submitting this will display the password for the next level.

  - **Password for Natas Level 11:** `UJdqkK1pTu6VLt9UHWAgRZz6sVUZ3lEk`

### Next Level

[Level 11 → Level 12](https://github.com/nimodb/natas-challenge-solver/tree/main/natas12)
