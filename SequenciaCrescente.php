<?php
function SequenciaCrescente(array $array){
    if( checkSecuenceArray($array) ) return true;
    $isSecuence = false;
    foreach($array as $index => $valueArray){
        $tempArray = $array;
        unset($tempArray[$index]);
        if( checkSecuenceArray($tempArray)) {
            $isSecuence = true;
            break;
        }
    }
    return $isSecuence;
}

function checkSecuenceArray($array){
    $isSecuence = true;
    $beforeValue = null;
    foreach($array as $index => $valueArray){
        if($beforeValue >= $valueArray ) $isSecuence = false;
        $beforeValue = $valueArray; 
    }
    return $isSecuence;
}