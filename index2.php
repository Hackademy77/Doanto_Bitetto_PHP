<?php

//!FUNZIONI: porzioni di codice riutilizzabili nel nostro programma

//?built-in functions: funzioni native di PHP
/* var_dump("Ciao"); */
//?user functions: funzioni definite da noi programmatori

//dichiarazione
function nomeFunzione(/* parametri */){ //! il nome di una funzione DEVE essere parlante (nome semantico)
    //istruzioni
    return /* valore */; //restituiamo un valore di output
}

//invocazione: la funzione viene eseguita effetivamente
/* output */nomeFunzione(/* valori in input */);

function sum($num,$num2){//parametri indicati durante la dichiarazione: parametri formali che non fanno altro che dare un nome ai valori in input
    /* $num = 1;
    $num2 = 2; */
    /* $sum = $num + $num2; */
    return $num + $num2;
}

//invocazione (qui indicheremo i valori in input)
/* echo sum(1,2); *///parametri reali
//il passaggio dei parametri è posizionale

//! SCOPE: porzione di codice in cui una variabile è visibile
//? globale (JS): una variabile definita all'esterno di una funzione è visibile anche all'interno di essa

/* let x = 5;
function printX(){
    console.log(x);
} */

//? locale(PHP): una variabile definita all'esterno di una funzione non è visibile all'interno di essa
/* const A = 10; //sono l'unico tipo di variabile con scope globale (devono avenere il nome in maiuscolo)

$x = 5;
function printVariable(){
    echo A;
} 

printVariable(); */


//?passaggio per valore
function incrementa($a){//passaggio per valore: il valore in input viene copiato all'interno del rispettivo parametro
    $a++;
    return $a;
}

/* $num = 1;
$result = incrementa($num);
echo $result; */


//?passaggio per riferimento
$num = 1;

function incrementa2(&$a){//passaggio per riferimento: in questo caso non avviene una copia dell'input ma viene passata l'indirizzo della locazione di memoria
    $a++;
    /* return $a; */
}

/* $num = incrementa2($num); */




//?parametro di default
function somma($a,$b = 0){//parametri di default: valori dati ad un parametro formale in caso di mancato input
    return $a + $b;
}



//?callback
//media di 3
$array = [2,4,6,8];
function media($array){
    $sum = array_reduce($array,function ($sum,$num){ //funzione anonima ed è detta callback(funzione passat come parametro)
        return $sum + $num;
    });
    return $sum / count($array);
    
}

//?parametri variabili: trasforma i parametri reali in un array
function media2(...$a){
    print_r($a);
    /* $sum = array_reduce($a,function ($sum,$num){ //funzione anonima ed è detta callback(funzione passat come parametro)
        return $sum + $num;
    });
    return $sum / count($a); */
}

media2(1,2,3,5,5,5,[1,3,4,5]);












