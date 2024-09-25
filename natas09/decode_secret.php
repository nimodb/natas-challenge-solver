<!DOCTYPE html>
<html>

<body>
    <?php
    // Encoded secret
    $encodedSecret = "3d3d516343746d4d6d6c315669563362";

    // Step 1: Convert hex to binary (reverse bin2hex)
    $secretHex = hex2bin($encodedSecret);

    // Step 2: Reverse the string (reverse strrev)
    $secretReversed = strrev($secretHex);

    // Step 3: Base64 decode (reverse base64_encode)
    $originalSecret = base64_decode($secretReversed);

    // Output the original secret
    echo "The original secret is: " . $originalSecret;
    ?>
</body>

</html>