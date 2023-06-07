<?php

//i linguaggi di programmazione devono essere tradotti tramite dei programmazione
//compilatori (linguaggio compilato)
//legge il codice scritto dai programmatori lo traduce e genera un eseguibile solo ed esclusivamente se durante la traduzione 
//non si incontrano errori
//interpretatori
//legge il codice scritto dai programmatori lo traduce ed lo esegue contemporanemaente, quindi non vi è un eseguibile

$x = 5; // let x=5;
//echo $y;//console.log(y);
//echo $x;//console.log(x);


//! PHP è un linguaggio lato server, interpretato ed è basato sull'OOP (Object Oriented Programming)
//! PHP (Hypertext Preprocessor) può manipolare il codice HTML
//! PHP si può intefacciare con dei database


//? una varibile è una locazione di memoria che deve contenere dei dati
//dichiarazione
$y;
// = : assegnazione (non è un operatore ma assegna dei valori ad una variabile)
$y = 2;
//inizializzazione
$i = 0;
//restizioni:
//1. non si possono utilizzare caratteri speciali tranne _
//2. il primo carattere non può essere un numero
//3. non possiamo usare spazi
//4. case sensitive 
$pippo = 1;
$piPPo = 2;

//! funzioni per stampare 
//?echo: stampa dati primitivi
//?var_dump: stampa anche dati composti e fornisce informazioni aggiuntive
//?print_r: stampa anche dati composti ma senza informazioni aggiuntive


//! tipi di dati
// primitivi: integer, float, booleani, string
//? boolean: true o false (servono principalmente per verificare se una condizione è verificata o meno)
//? l'eco converte tutti i valori in stringhe, per cui la conversione di false equivale ad una stringa vuota

$string = "ciao";
$string2 = 'ciao';

$age = 26;

/* echo "$string, sono Donato e ho $age anni. \n"; //la string interpolation è supportata solo dai doppi apici ed è utilizzabile solo con dati primitivi
echo  $string . ', sono Donato' . "\n"; // il \ prende il nome di scape character
echo 'L\'erba è verde.'; */



//! dati composti: dati che possono contenere diversi tipi di dati
//! essi sono: array, array associativo (e gli oggetti) 

//? array
//gli array sono una lista di valori
$array = [1, 2, 3, 4]; // array omogeneo
$array2 = [1, "ciao", 4, false]; // array eterogeneo 
//ai valori di un array gli viene attribuito un indice che ha valore numerico 
//gli array sono 0-based

//sugar syntax: la dichiarazione di un array avviene con []
$array3 = array(1, 2, 3, 4); //! da non utilizzare

/* var_dump($array); */

//?array associativi: gli indici vengono stabiliti dal programmatore e non assegnati automaticamente
$associativo = [
    "nome" => "Donato",
    "cognome" => "Bitetto",
    "età" => 26
];

//!operatori: ci permettono di effettuare delle operazioni
//?matematici: +,*,-,%,/ che agiscono su valori numerici (interi e float). Restituiscono valori numerici
$num1 = 5;
$num2 = 4;
$bool = true;

$sum = $num1 + $num2;
$diff = $num1 - $num2;
$molt = $num1 * $num2;
$div = $num1 / $num2;

//?confronto: ==,===,<,>,>=,<=,!. Essi restituiscono valori booleani
$uguaglianza = $num1 === $num2;
// == : confronta i valori dei due operandi
// === : confronta il tipo di dato e successivamente anche i valori dei due operandi
// < 
// ! : negazione
$result = !$bool;


//?logici: AND(&&), OR(||), NOT(!). Restituiscono dei valori booleani
$num1 = 5;
$num2 = 4;
$a = $num1 > $num2; //true
$b = $num1 == $num2; //false

$result = $a && $b; // l'and restituisce true se entrambi gli operandi sono true
$result = $a || $b; //l'or restituisce tre quando almeno uno dei due operandi è true



//!costrutti
//dato un array di studenti formato da nome e media. Vogliamo stampare il nome di tutti gli studenti
//che hanno una media uguale o superiore a 6

//per risolvere un problema usiamo gli algoritmi. Un algoritmo è sequenza di istruzioni
//teorema di BOHM e JACOPINI: siamo in grado di implementare un qualsiasi algoritmo (di coseguenza risolvere qualsiasi problema)
// tramite 3 costrutti:
//?1. sequenza
/* $numero1 = 5;
$somma = $numero1 + $numero2;
$numero2 = 4; */
//?2. selezione: quando viene eseguita una istruzione inve che un altra sulla base del verificarsi di una condizione
//voglio stabile se un utente può guidare o meno
$age = 7;
/* if($age>=18){
    echo "Ok, puoi guidare!";
}else{
    echo "Mi dispiace ma non puoi guidare!";
} */

/* $colorePreferito = "giallo";
if ($colorePreferito == "nero") {
    echo "Il nero è il tuo colore preferito";
} else if ($colorePreferito == "verde") {
    echo "Il verde è il tuo colore preferito";
} else if ($colorePreferito == "bianco") {
    echo "Il bianco è il tuo colore preferito";
} else {
    echo "ATTENZIONE: nessun colore trovato";
} */

$colorePreferito = "bianco";
switch ($colorePreferito) {
    case "nero":
        echo "Il nero è il tuo colore preferito";
        break;
    case "verde":
        echo "Il verde è il tuo colore preferito";
        break;
    case "bianco":
        echo "Il bianco è il tuo colore preferito";
        break;
    case "giallo":
        echo "Il giallo è il tuo colore preferito";
        break;
    default:
        echo "ATTENZIONE: nessun colore trovato";
}

//?3. iterazione: ci permette di riutilizzare una sequenza di istruzioni
//? l'iterazione deve essere formato da:
    //?1. contatore
    //?2. condizione
    //?3. incremento
/* $voti=[1,2,3,4,5]; */

/* for($i = 0; $i<count($array); $i++){
    echo $array[$i];
} */

/* $i = 0;
while($i<count($array)){
    $i++;
    echo $array[$i];
} */

/* $i = 0;
do{
    echo $array[$i];
    $i++;
}while(false); */


/* for($i = 0; $i<count($voti); $i++){
    echo $voti[$i];
} */

$associativo= [["a","b","c"],2,3,4];

$studenti = [
    [
        "nome" => "Christian"
    ],
    [
        "nome" => "Maria"
    ],
    [
        "nome" => "Benedetto"
    ]
];


foreach($studenti as $key => $studente){
    if($key != 2){
        echo "$key =>" . $studente["nome"] . "\n";
    }
}



?>