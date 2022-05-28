<?php
// Store and print elements in two diamensional Array
//get input from user
if (is_numeric($row) && ($col)) {
    $row = readline("Enter No of rows : ");
    $col = readline("Enter No of column :");
} else {
    echo "please enter valid input";
}


//Created array and store the values
function create2DArrayInteger($row, $col)
{
    $array = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $store =  readline("Enter Array elements $i $j: \n");
            if (is_numeric($store)) {
                $array[$i][$j] = $store;
            } else {
                echo " please enter valid number";
            }
        }
    }

    return $array;
}
//create double array 
function createArrayDouble($row, $col)
{
    $arrayDouble = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $store = readline("Enter Double value for $i$j elements :\n");
            if (is_double($store)) {
                $arrayDouble[$i][$j] = $store;
            } else {
                echo "please enter a valid number";
            }
        }
    }


    return $arrayDouble;
}

echo " please enter valid number";

/*
create boolean array

*/
function createBooleanArray($row, $col)
{

    $arrayBoolean = array();
    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            $storeBoolean = readline("Enter boolean value $i$j elements :\n");
            if (is_bool($storeBoolean)) {
                $arrayBoolean[$i][$j] = $arrayBoolean;
            } else {
                echo "please enter valid number";
            }
        }
    }
    return $arrayBoolean;
}
//diaplay array
function displayArray($array, $row, $col)
{

    for ($i = 0; $i < $row; $i++) {
        for ($j = 0; $j < $col; $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "\n";
    }
}

//Calling function
$TwoDArray =  create2DArrayInteger($row, $col);
echo "\n";
$doubleArray = createArrayDouble($row, $col);
displayArray($TwoDArray, $row, $col);
echo "\n";
displayArray($doubleArray, $row, $col);
$boolArray = createBooleanArray($row, $col);
echo "\n";
displayArray($boolArray, $row, $col);
