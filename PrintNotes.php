<?php
function printNotes($amount) {
    if ($amount % 10 != 0) {
        echo "Amount should be in multiples of 10.\n";
        return;
    }

    $hundreds = intdiv($amount, 100);
    $amount %= 100;

    $fifties = intdiv($amount, 50);
    $amount %= 50;

    $tens = intdiv($amount, 10);
    $amount %= 10;

    echo "₹100 notes: $hundreds\n";
    echo "₹50 notes: $fifties\n";
    echo "₹10 notes: $tens\n";
}

$amount = 1540;
printNotes($amount);
?>
