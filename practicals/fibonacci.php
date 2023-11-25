<?php
function fibonacci($n) {
    $fib = [];
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    return $fib;
}

// Number of terms in the Fibonacci sequence to generate
$terms = 10; // Change this value to generate a different number of terms

$result = fibonacci($terms);

echo "Fibonacci sequence up to $terms terms: ";
foreach ($result as $num) {
    echo $num . " ";
}
?>