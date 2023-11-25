<?php
function factorial($n) {
    if ($n === 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Test the factorial function with a number
$number = 5; // You can change this number to calculate the factorial for a different number
$result = factorial($number);
echo "The factorial of $number is: $result";
?>