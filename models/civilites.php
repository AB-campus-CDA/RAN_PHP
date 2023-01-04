<?php

// liste civilités :
$civList = [
    'M',
    'Mme',
    'Mlle'
    //'non binaire'
];

$civReg = "/(";

for ($i=0; $i<count($civList); $i++) {
    $civReg .= "^".$civList[$i]."$";

    if ($i < count($civList)-1) {
        $civReg .="|";
    } else {
        $civReg .= ")/";
    }
}