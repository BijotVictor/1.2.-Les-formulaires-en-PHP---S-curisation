<?php

if (empty($_POST["user_lastname"])) {
    echo 'Lastname is required';
} 
elseif (empty($_POST["user_name"])) {
    echo 'Name is required';
}
elseif (empty($_POST["user_email"])) {
    echo 'Email is required';
}
elseif (!filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL)) {
    echo 'Vous devez saisir une adresse email valide';
}
elseif (empty($_POST["user_phoneNumber"])) {
    echo 'Phone Number is required';
}
elseif (empty($_POST["user_subject"])) {
    echo 'Subject is required';
}
elseif (empty($_POST["user_message"])) {
    echo 'Message is required';
}
else {
    echo 'Merci ' . $_POST['user_name'] . ' ' . $_POST['user_lastname'] . ' de nous avoir contacté à propos de “' . $_POST['user_subject'] . 
'” . Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phoneNumber'] . 
' dans les plus brefs délais pour traiter votre demande :<br>' .
$_POST['user_message'];
}

?>