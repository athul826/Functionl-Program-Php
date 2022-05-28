<?php
/*
Write a program WindChill that takes two double command-line arguments t
and v and prints the wind chill.
*/
// passing two commnad line arguments 

class WindChill
{
    static function WindChill($temp, $speed)
    {
        if ($temp < 50 && $speed > 3 && $speed < 120) {
            $w = 35.74 + (0.62158 * $temp) + (((0.4275 * $temp) - 35.75) * (pow($speed, 0.16)));
            echo "Wind Chill is : $w \n";
        } else {
            echo "Invalid Input !! Please enter valid input";
        }
    }
}
WindChill::WindChill($argv[1], $argv[2]);
