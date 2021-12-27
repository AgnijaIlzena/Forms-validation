<?php

function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$name = testInput($_POST['user-name']);
$fname = testInput($_POST['user-firstName']);
$telephone = testInput($_POST['user-phone']);
$email = testInput($_POST['user-email']);
$subject = testInput($_POST['user-subject']);
$message = testInput($_POST['user-message']);


$error = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($name) ||
        empty($fname) ||
        empty($telephone) ||
        empty($email) ||
        empty($subject) ||
        empty($message)) {
        $error = 'Please fill all required fields';
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)){
        $error = 'Only letters and white space allowed in Last Name field';
     } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $fname)){
        $error = 'Only letters and white space allowed in First Name field';
    } elseif (!filter_var($_POST['user-email'], FILTER_VALIDATE_EMAIL)){
        $error = 'Email adresse is not well formed';
    } else {

        echo 'Merci ' . $name . ' ' . $fname . ' de nous avoir contacté à propos de "' . $subject . ' " . <br>';

        echo ' Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $telephone . '  dans les plus brefs délais pour traiter votre demande : <br>'

            . $message;
    }
}


echo '<br>';
echo '<p style="color:red">' . $error . '</p>';








