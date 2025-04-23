<?php
$input = "Joshua Sirumani";
$count = 0;

// Loop until we hit an empty index (end of string)
for ($i = 0; ; $i++) {
    if (!isset($input[$i])) {
        break; // stop when we reach beyond the string
    }

    // Optional: Only count letters (exclude space/punctuations)
    $ascii = ord($input[$i]);
    if (($ascii >= 65 && $ascii <= 90) || ($ascii >= 97 && $ascii <= 122)) {
        $count++;
    }
}

echo "Total letters: " . $count;
?>
