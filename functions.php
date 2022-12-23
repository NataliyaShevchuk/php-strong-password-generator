<?php
$lengthPassword = $_POST["password"] ?? " ";

function generatePassword($lengthPassword){
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $capitalAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!|$&/.-@#';

    $generate = str_shuffle($alphabet.$capitalAlphabet.$numbers.$symbols);

    $newPassword = " ";

    for ($i = 0; $i < $lengthPassword; $i++){
        $generateRandomPassword = rand(0, strlen($generate) - 1);
        $newPassword .= $generate[$generateRandomPassword];
    }
    return $newPassword;
}


?>