<?php
/*
program to find Three elements sum is Equal to Zero.
*/
class SumOfThreeNumbers
{
    static function findSumToZero($number, $n)
    {
        for ($i = 0; $i < $n - 2; $i++) {
            for ($j = $i + 1; $j < $n - 1; $j++) {
                for ($k = $j + 1; $k < $n; $k++) {
                    $sum = ($number[$i] + $number[$j] + $number[$k]);
                    if ($sum == 0) {
                        echo $number[$i], " ",
                        $number[$j], " ",
                        $number[$k], "\n";
                    }
                }
            }
        }

        if ($sum != 0) {
            echo "invalid input";
        }
    }
}
$number = array(3, -1, -7, -4, -5, 9, -4);
$n = sizeof($number);
SumOfThreeNumbers::findSumToZero($number, $n);
