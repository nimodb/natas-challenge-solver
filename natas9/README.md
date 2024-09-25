# Natas Level 9

- Username: natas9
- URL: http://natas9.natas.labs.overthewire.org

## Solution

To solve Natas Level 9:

- **Inspect the Source Page:** From the provided source code of tis page, we see that the `$encodedSecret` variable and `encodeSecret($secret)` function.

  1. The `$encodedSecret` variable contains the value `3d3d516343746d4d6d6c315669563362`.

  2. The `encodeSecret($secret)` function applies the following operations on the secret:

     1. **[Base64 encoding](https://www.php.net/manual/en/function.base64-encode.php)** (`base64_encode`)
     2. **[Reversing the String](https://www.php.net/manual/en/function.strrev.php)** (`strrev`)
     3. **[Converting to hexadecimal](https://www.php.net/manual/en/function.bin2hex.php)** (`bin2hex`)

  3. **Decoding the Secret:** To solve this, we need to reverse the operation to retrieve the original secret:

     1. Convert the hexadecimal back to a string.
     2. Reverse the string.
     3. Base64 decode the string.

  4. Let's break down the process step by step using:

     1. **[PHP](https://github.com/nimodb/natas-challenge-solver/tree/main/natas9/decode_secret.php)**
     2. **[Python](https://github.com/nimodb/natas-challenge-solver/tree/main/natas9/decode_secret.py)**
     3. **[Rust](https://github.com/nimodb/natas-challenge-solver/tree/main/natas9/decode_secret.rs)**

     > These scripts decodes the secret. Running the code will reveal the original secret: `oubWYf2kBq`

  5. Use `oubWYf2kBq` as the secret and input in the form to access the password for Natas Level 9:

  - **Password for Natas Level 9:** `ZE1ck82lmdGIoErlhQgWND6j2Wzz6b6t`

### Next Level

[Level 9 → Level 10](https://github.com/nimodb/natas-challenge-solver/tree/main/natas10)
