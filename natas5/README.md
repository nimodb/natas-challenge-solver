# Natas Level 5

- Username: natas5
- URL: http://natas5.natas.labs.overthewire.org

## Solution

To solve Natas Level 5:

- **Analyze the restriction:** The page checks the `Referer` header to unsure users are visiting from `http://natas5.natas.labs.overthewire.org/`. Since you're visiting from the previous level's page (http://natas4.natas.labs.overthewire.org/), access is disallowed.

  **1. Approach 1: Modify the `Referer` Header**

  1.  **Manipulate the Referer header:** You need to change the `Referer` header in your browser or HTTP request to bypass the restriction.

  2.  **Use a browser extension or cURL:**

      - **Option 1:** Browser Developer Tools:
        - Open your browser's developer tools (F12 or right-click > "Inspect").
        - Navigation to the "Network" tap and refresh the page.
        - Modify request's `Referer` header `http://natas5.natas.labs.overthewire.org/`.
      - **Option 2:** cURL Command:

        ```arduino
        curl -H "Referer: http://natas5.natas.labs.overthewire.org/" http://natas4.natas.labs.overthewire.org/ --user natas4:QryZXc2e0zahULdHrtHxzyYkj59kUxLQ
        ```

  **2. Approach 2: Create an Anchor Tag**

  1. **Manually add a link:**

     - Visit `http://natas5.natas.labs.overthewire.org/`
     - Inspect the page and find the `div` where the link is provided.
     - Manually add a anchor tag that directs you to `http://natas4.natas.labs.overthewire.org/` as `Referer`:

     ```html
     <a href="http://natas4.natas.labs.overthewire.org/" target="_blank">
       Go to Level 4
     </a>
     ```

     - This trick will make it appear as if you're coming from the correct `Referer`

- **Password for Natas Level 5:** `0n35PkggAPm2zbEpOU802c0x0Msn1ToK`

### Next Level

[Level 5 → Level 6]()
