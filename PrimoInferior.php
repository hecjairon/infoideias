<?php

function PrimoInferior(int $num){
    if($num === 1 || $num < 1) return 0;
    if($num === 2) return 2;
    $numPrimo = 0;
    
    foreach(range(3,$num) as $checkNumPrimo){
        $contRest = 0;
        for($calcPrimo = $checkNumPrimo; $calcPrimo >= 1; $calcPrimo --){
            if($checkNumPrimo % $calcPrimo === 0){
                $contRest++;
            }
        }
        $numPrimo = ($contRest === 2) ? $checkNumPrimo : $numPrimo;
    }
    return $numPrimo;
}