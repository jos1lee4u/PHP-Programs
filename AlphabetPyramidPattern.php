<?php
$n = 5;
for ($i = 0; $i < $n; $i++) {
    for ($j = $n - $i; $j > 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    $ch = 'A';
    for ($k = 0; $k <= $i; $k++) {
        echo $ch . " ";
        $ch++;
    }
    echo "<br>";
}
?>
