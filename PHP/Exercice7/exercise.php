<?php
function divide(int $value, int $par) : float{
    if ($par == 0) {
        throw new RuntimeException('Division by 0 is not allowed');
    }
    return (float) $value / $par;
}

function arrayDivide(array $values, int $divisor) : array {
    $myArray=[];
    
    try{
        foreach($values as $value){
           $myArray[] = divide($value, $divisor);
        } 
        return $myArray;
    } catch(RuntimeException $error){
        echo $error->getMessage();
        return $values;
    }
        
}
