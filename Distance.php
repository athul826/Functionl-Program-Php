<?php
/*
program to find the sqrt root of two lines
*/
// passing command line argumets into x and y,
class Distance
{
    static function findDistance($x, $y)
    {
        if (is_numeric($x) && $y) {
            $sqr = sqrt(($x * $x) + ($y * $y));
            echo "Distance is : " . $sqr;
        } else {
            echo "please enter valid number";
        }
    }
}
//Reading Commandline

$x = $argv[1];
$y = $argv[2];

Distance::findDistance($x, $y);
