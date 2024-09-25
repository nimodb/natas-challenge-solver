import codecs
import base64

# Encoded secret
encoded_secret = "3d3d516343746d4d6d6c315669563362"

# Step 1: Convert hex to bytes
secret_bytes = codecs.decode(encoded_secret, "hex")

# Step 2: Reverse the string
secret_reversed = secret_bytes[::-1]

# Step 3: Base64 decode
original_secret = base64.b64decode(secret_reversed)

# Output the original secret
print ("The original secret is: ", original_secret.decode("utf-8"))
