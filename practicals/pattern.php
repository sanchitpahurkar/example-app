<?php
$rows = 5; 

for ($i = $rows; $i > 0; $i--) {
    for ($j = 0; $j < $i; $j++) {
        echo "* ";
    }
    echo PHP_EOL;
}
?>
