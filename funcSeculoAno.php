<?php

function SeculoAno(int $ano){
    if($ano < 0) return false;
    $calculaSeculo = $ano/100;
    $resto = $ano%100;
    $seculo = (int)$seculo + (($resto>0) ? 1 :0);
    return $seculo;
}