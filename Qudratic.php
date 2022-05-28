<?php
class QuadraticProgram
{
    static function quadratic($num1, $num2, $num3)
    {
        $delta = $num2 * $num2 - 4 * $num1 * $num3;
        $delta = abs($delta);
        $root1 = (-$num2 + sqrt($delta)) / (2 * $num1);
        $root2 = (-$num2 - sqrt($delta)) / (2 * $num1);
        echo "The Root 1 = " . $root1 . "\n";
        echo "The Root 2 = " . $root2 . "\n";
    }
}
$num1 = readline("Enter the value for num1 :");
if (is_numeric($num1) && $num1 > 0) {
} else {
    echo "please enter valid number \n";
}
$num2 = readline("Enter the Value for num2 :");
if (is_numeric($num2) && $num2 > 0) {
} else {
    echo " please enter valid number\n";
}
$num3 = readline("Enter the Value for num3 :");
if (is_numeric($num3) && $num3 > 0) {
} else {
    echo "please enter a valid number\n";
}
QuadraticProgram::quadratic($num1, $num2, $num3);
