<?php

function generatePassword($lenghtPass)
{
    $characters = '.,!=_+*0123456789abcdefABCDEF';
    $charactersLen = strlen($characters);
    $passwordString = '';
    for ($i = 0; $i < $lenghtPass; $i++) {
        $passwordString .= $characters[rand(0, $charactersLen - 1)];
    }
    return $passwordString;
}    

$passwordCreator = isset($_GET["password"]);

?>