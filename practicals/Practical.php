<?php
namespace practicals;
class Practical {
    // Function to print "Hello, World!"
    public static function printHello() {
        echo "Hello, World!";
    }

    // Function to add two numbers
    public static function add($num1, $num2) {
        return $num1 + $num2;
    }

    // Function to generate Fibonacci sequence
    public static function generateFibonacciSequence($n) {
        $sequence = [];
        $a = 0;
        $b = 1;
        
        for ($i = 0; $i < $n; $i++) {
            $sequence[] = $a;
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
        
        return $sequence;
    }
}
?>
