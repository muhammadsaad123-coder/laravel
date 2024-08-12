<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2</title>
</head>
<body>
    <h2>Unique Characters Extractor</h2>
    <p>Check the console for output.</p>
    <script>
        function extractUniqueCharacters(str) {
            let uniqueChars = '';
            let seenChars = {};

            for (let i = 0; i < str.length; i++) {
                if (!seenChars[str[i]]) {
                    uniqueChars += str[i];
                    seenChars[str[i]] = true;
                }
            }
            return uniqueChars;
        }

        // Example usage
        let exampleString = "thequickbrownfoxjumpsoverthelazydog";
        let uniqueCharacters = extractUniqueCharacters(exampleString);
        console.log("Unique characters:", uniqueCharacters);
    </script>
</body>
</html>
