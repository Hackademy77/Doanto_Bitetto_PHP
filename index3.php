<?php

//validazione di una password (validazione: controllare se un input rispetti determinate condizioni)
    //la password deve essere lunga almeno 8 caratteri
    //deve contenere almeno un numero
    //deve contenere almeno una lettera maiuscola
    //deve contenere almeno un carattere speciale


//la password deve essere lunga almeno 8 caratteri
    //se la lunghezza password è maggiore o uguale di 8
        //la password è valida e prosegui
    //altrimenti
        //non proseguire

    //se la lunghezza password è minore di 8
        //stop


$password = readline('Inserire password: ');

$check1 = false;
if (strlen($password) >= 8){
    $check1=true;
}
       
var_dump($check1);

//deve contenere almeno un numero
    //per ogni carattere contenuto nella password
        //se il carattere è un numero
            //la password è valida

$check2 = false;
for($i = 0; $i < strlen($password); $i++) {
    if(is_numeric($password[$i])){//password = ciao1 => i=2 => password[i] = a
        $check2 = true;
    }
}

var_dump($check2);



//deve contenere almeno un carattere maiuscolo
    //per ogni carattere contenuto nella password
        //se il carattere è maiuscolo
            //la password è valida

$check3 = false;
for($i = 0; $i < strlen($password); $i++) {
    if(ctype_upper($password[$i])){//password = ciao1 => i=2 => password[i] = a
        $check3 = true;
    }
}
            
var_dump($check3);


//deve contenere almeno un carattere speciale
    //per ogni carattere contenuto nella password
        //se il carattere non è un numero e una lettera
            //la password è valida


    //dato un array di carateeri speciali
    //per ogni carattere contenuto nella password
        //se il carattere della password è contenuto nell'array di caratteri speciali
            //la password è valida
$check4 = false;
$specialChars=['!','@','#','$','%','^','&','*','(',')'];//ciaooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
for ($i=0; $i < strlen($password); $i++) { 
    if(in_array($password[$i],$specialChars)){
        $check4 = true;
    }
}

var_dump($check4);

if($check1 && $check2 && $check3 && $check4){
    echo "La password è valida.";
}else{
    echo "La password non è valida.";
}

