<?php

$nameErr = $fnameErr = $subjectErr = $telephoneErr = $emailErr = $messageErr = '';
$name = $fname = $subject = $telephone = $email = $message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['user-name'])) {
        $nameErr = 'Last Name is required !';
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['user-name'])){
        $nameErr = 'Only letters and white space allowed';
    } else {
        $name = testInput($_POST['user-name']);
    }

    if (empty($_POST['user-firstName'])) {
        $fnameErr = "First name is required !";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $_POST['user-firstName'])) {
        $fnameErr = 'Only letters and white space allowed';}
    else {
        $fname = testInput($_POST['user-firstName']);
    }

    if (empty($_POST['user-email'])) {
        $emailErr = "Email adresse is required";
    } elseif (!filter_var($_POST['user-email'], FILTER_VALIDATE_EMAIL)){
        $emailErr = "Email adresse is not well formed";
    }
    else {
        $email = testInput($_POST['user-email']);
    }

    if(empty($_POST['user-subject'])) {
        $subjectErr = "Subject is required";
    } else {
    $subject = testInput($_POST['user-subject']);
    }

    if (empty($_POST['user-phone'])) {
        $phoneErr = "Phone number is required";
    } else {
    $telephone = testInput($_POST['user-phone']);
    }

    if(empty($_POST['user-message'])){
        $messageErr = "Message is required";
    } else {
    $message = testInput($_POST['user-message']);
    }
}

function testInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo '<br>';
echo '<p style="color:red">' . '* '. $nameErr . '</p>';
echo '<p style="color:red">' . $fnameErr . '</p>';
echo '<p style="color:red">' . $subjectErr . '</p>';
echo '<p style="color:red">' . $telephoneErr . '</p>';
echo '<p style="color:red">' . $emailErr . '</p>';
echo '<p style="color:red">' . $messageErr . '</p>';
echo '<br>';




echo 'Merci ' . $name . ' ' . $fname . ' de nous avoir contacté à propos de "'.  $subject . ' " . <br>';

echo ' Un de nos conseiller vous contactera soit à l’adresse ' . $email . ' ou par téléphone au ' . $telephone . '  dans les plus brefs délais pour traiter votre demande : <br>'

    . $message;

?>

