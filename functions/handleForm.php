<?php

//var_dump($_POST);

$form_is_valid = false;
$data = "";
if (!isset($errors)) {
    $errors = [];
}


$validationSchema = [
    // to passive inputs : htmlentities($input)
    'civilite' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/(^M\.$|^Mme$)/"]],
    'lastname' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/^[a-zA-Z-']{2,30}$/"]],
    'firstname' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/^[a-zA-Z-']{2,30}$/"]],
    'email' => [FILTER_VALIDATE_EMAIL, null],
    'raison' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/(^job$|^presta$|^info$)/"]],
    'message' => [FILTER_VALIDATE_REGEXP, ["regexp"=>"/^.{15,500}$/"]]
];

$errorMessages = [
    'civilite' => "Spécifiez la civilité",
    'lastname' => "Entrez votre nom de famille",
    'firstname' => "Entrez votre prénom",
    'email' => "Votre email ne semble pas valide",
    'raison' => "Indiquez la raison de votre message",
    'message' => "Veuillez laisser un message entre 15 et 500 caractères"
];


// if form already submited
if (count($_POST) === 6 ) {
    $form_is_valid = true;

    // check received data validity
    foreach ($validationSchema as $key => $value) {
        if (filter_input(INPUT_POST, $key, $value[0], $value[1] ? array("options"=>$value[1]) : null )) {
            $data .= $key . " : " . $_POST[$key] . "\n";
        } else {
            $form_is_valid = false;
            array_push($errors, $errorMessages[$key]);
        }
    }
}


if ($form_is_valid) {
    //echo "ok";
    $file = "messages" . DIRECTORY_SEPARATOR . $_POST['firstname'] ."_". $_POST['lastname'] ."_". date('Y-m-d-H-i-s') . ".txt";
    file_put_contents($file, $data, FILE_APPEND);
} else {
    //echo "Le formulaire n'était pas valide :(";
}

