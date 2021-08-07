<?php

function SeculoAno($ano){
    $calculaSeculo = $ano/100;
    $resto = $ano%100;
    $seculo = (int)$seculo + (($resto>0) ? 1 :0);
    return $seculo;

}