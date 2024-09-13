# Natas Level 7

- Username: natas7
- URL: http://natas7.natas.labs.overthewire.org

## Solution

To solve Natas Level 7:

- **Inspect the Source Page:** From the provided source code of this page, we see that the form ask for a `secret`. There is a reference to `includes/secret.inc`, which contains the secret.

  1. **Fine the secret code:** From the `includes/secret.inc`. we discover the secret is (source page):

     ```
     <?
         $secret = "FOEIUWGHFEEUHOFUOIU";
     ?>
     ```

  2. **Submit the Secret:** Enter the secret (`FOEIUWGHFEEUHOFUOIU`) into the form and submit it. If the secret code matches, the password will be determined.

  3. **Password Retrieval:** After submitting the correct secret, the password for Natas 7 is revealed.

  - **Password for Natas Level 7:** `bmg8SvU1LizuWjx3y7xkNERkHxGre0GS`

### Next Level

[Level 7 → Level 8](https://github.com/nimodb/natas-challenge-solver/tree/main/natas8)
