<?php

$number = readline("enter number:");
for ($i = 1; $i <= $number; $i++) {
    for ($j = 1; $j <= $number; $j++) {
        echo ("$i, $j\n");
    }
}
?>