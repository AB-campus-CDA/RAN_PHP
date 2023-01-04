<?php

// liste raisons :
$raisonList = [
    'job' => "Proposition d'emploi",
    'info' => "Demande d'informations",
    'presta' => "Prestation",
    'tour' => "Tourisme"
];

$raisonReg = "/(";

for ($i=0; $i<count($raisonList); $i++) {
    $raisonReg .= "^".array_keys($raisonList)[$i]."$";

    if ($i < count($raisonList)-1) {
        $raisonReg .="|";
    } else {
        $raisonReg .= ")/";
    }
}