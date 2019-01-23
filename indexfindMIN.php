<?php

$Array1 = array(5,7,2,33,6,11,8,77,56);
$index1 = 0;

function findMIN($Array1){
    $min = $Array1[0];
    for ($i = 0;$i < count($Array1); $i++){
        if ($min > $Array1[$i]){
            $min = $Array1[$i];
            $index1 = $i;
        }
    }
    return $min . " ở vị trí " ."[". $index1 ."]";
}

echo "<h1>".findMIN($Array1)."</h1>";