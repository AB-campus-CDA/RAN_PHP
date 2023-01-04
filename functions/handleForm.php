<?php

//var_dump($_POST);

$form_is_valid = false;
$data = "";
$errors = [];


$validationSchema = [
    'civilite' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/(^M\.$|^Mme$)/"]],
    'lastname' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/^[a-zA-Z-']{2,30}$/"]],
    'firstname' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/^[a-zA-Z-']{2,30}$/"]],
    'email' => [FILTER_VALIDATE_EMAIL, null],
    'raison' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/(^job$|^presta$|^info$)/"]],
    'message' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/^.{15,500}$/"]],
    'integer' => [FILTER_VALIDATE_INT, null]
];


// if form already submited
if (count($_POST) === 6 ) {
    $form_is_valid = true;

    // check received data validity
    foreach ($validationSchema as $key => $value) {

        if (filter_input(INPUT_POST, $key, $value[0], $value[1] ? array("options"=>$value[1]) : null )) {
            $data .= $key . " : " . $_POST[$key] . "\n";
        } else {
            $data .= "error ! \n";
        }
    }
}


if ($form_is_valid) {
    echo "ok";
    $file = "messages" . DIRECTORY_SEPARATOR . $_POST['firstname'] ."_". $_POST['lastname'] ."_". date('Y-m-d-H-i-s') . ".txt";
    file_put_contents($file, $data, FILE_APPEND);
} else {
    //echo "fock";
}

