<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Words in String</title>
</head>
<body>
<?php
$string = "samir hudda sem4 hi ";
$wordCount = 0;
$inWord = false;

for ($i = 0; $i < strlen($string); $i++) {

    if ($string[$i] != ' ' && !$inWord) {
        $wordCount++;
        $inWord = true;
    } elseif ($string[$i] == ' ') {

        $inWord = false;
    }
}

echo "Number of words in the string: " . $wordCount;
?>
</body>
</html>
