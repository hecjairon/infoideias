<?php
$arrayRand = [];
foreach(range(1,20) as $index => $incremet){
    $addNum = rand(1,10);
    $arrayRand[$index] = $addNum;
}
$countArray =  array_count_values($arrayRand);
arsort($countArray);
$numberMostRepeat = array_key_first($countArray);
reset($countArray);
$totalRepeat = current($countArray);

echo "O número que mais se repete é o : {$numberMostRepeat}<br>";
echo "Ele se repete {$totalRepeat} vezes";