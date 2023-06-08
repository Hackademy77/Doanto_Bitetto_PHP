<?php

//!codice funzionale
//?estrapolamente, incapsulamento ed astrazione


function checkStringLenght($string)
{
    if (strlen($string) >= 8) {
        return true;//return restituisce true e stoppa l'esecuzione di tutta la funzione
    }
    return false;
}


function checkStringNumber($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {  
            return true;
        }
    }
    return false;
}


function checkStringUpper($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    return false;
}


function checkSpecialChar($string)
{
    $specialChars = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')'];
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $specialChars)) {
            return true;
        }
    }
    return false;
}


function checkPassword($string){ //void functions: funzione che non hanno un output
    if(checkStringLenght($string) && checkStringNumber($string) && checkStringUpper($string) && checkSpecialChar($string)){
        echo "La password è valida.";
    }else{
        echo "La password non è valida.";
    }
}

$password = readline('Inserire password: ');
checkPassword($password);