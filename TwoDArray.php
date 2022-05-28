<?php
/* 
Program to read 2D array and print the elements
*/


$row = readline("Enter no. of rows: ");
$col = readline("Enter the no. of coloumns: ");

function validation($number)
{
    if (is_numeric($number) && $number > 0)
        return true;
    return false;
}

function createInt2Array($row, $col)
{
    $count = 0;
    $intArray = array();

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $intstore = readline("Enter $i $j elemnt: ");
            if (is_numeric($intstore)) {
                $intArray[$i][$j] = $intstore;
            } else {
                echo "\nInvalid entry";
                echo "\n Enter valid input";
                echo "\n";
                createInt2Array($row, $col);
                break;
            }
        }
    }

    return $intArray;
}


function doubleArray($row, $col)
{

    $doubleArray = array();

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $doubleStore = readline("Enter $i $j elemnt of double array: ");
            if (is_numeric($doubleStore)) {
                $doubleArray[$i][$j] = $doubleStore;
            } else {
                echo "\nInvalid entry";
                echo "Enter a valid input/n";

                doubleArray($row, $col);
            }
        }
    }

    return $doubleArray;
}

function boolArray($row, $col)
{
    $boolArray = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $bStore = readline("Enter $i $j of boolean array: ");
            if (is_bool($bStore)) {
                $boolArray[$i][$j] = $bStore;
            } else {
                echo "\nInvalid input";
            }
        }
    }
    return $boolArray;
}


function displayArray($array, $row, $col)
{

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo " ";
            echo  $array[$i][$j];
        }
        echo "\n";
    }
}


function main($row, $col)
{
    if (validation($row) && validation($col)) {
        $integerArray = createInt2Array($row, $col);
        displayArray($integerArray, $row, $col);

        // $doubleValueArray = doubleArray($row, $col);
        //displayArray($doubleValueArray, $row, $col);

        // $booleanArray = boolArray($row, $col);
        //displayArray($booleanArray, $row, $col);

    } else {
        echo "\nInvalid input";
    }
}
main($row, $col);
