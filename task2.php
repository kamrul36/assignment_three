<?php
$numbers = [1,2,3,4,5,6,7,8,9,10];

function removeEvenNumbers($numberArray) {
    $resultArray = [];
    
    foreach ($numberArray as $number) {
        if ($number % 2 != 0) {
            $resultArray[] = $number;
        }
    }
    
    print_r($resultArray);
}

removeEvenNumbers($numbers);