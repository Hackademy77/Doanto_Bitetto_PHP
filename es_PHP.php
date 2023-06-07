<?php

/* Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, 
per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
]; */


//definire un array di utenti con nome, cognome e genere
//per ogni utente presente nell'array
    //se il genere dell'utente è uguale a maschio
        //stampa Bungiorno Sig. con il nome e il cognome
    //altrimenti se il genere dell'utente è femmina
        //stampa Bungiorno Sig.ra con il nome e il cognome
    //altrimenti 
        //stampa Bungiorno con il nome e il cognome

//1. definire un array di utenti con nome, cognome e genere
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB','età'=>20],
    ['name' => 'Donato', 'surname' => 'Bitetto', 'gender' => 'M','età'=>26],
    ['name' => 'Maria', 'surname' => 'Silvia', 'gender' => 'F','età'=>17],
    ['name' => 'Carla', 'surname' => 'Delfine', 'gender' => 'F','età'=>20],
    ['name' => 'Nicola', 'surname' => 'Menonna', 'gender' => 'Gfdgh','età'=>4]
  ];

  /* print_r($users); */

//2. ciclare nell'array
/* foreach($users as $user){
    //user => ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB']
    
    switch($user['gender']){
        //possibili casi
        case "M":
            echo "Buongiorno Sig. $user[name] $user[surname].";
            break;
        case "F":
            echo "Buongiorno Sig.ra $user[name] $user[surname].";
            break;
        case "NB":
            echo "Buongiorno $user[name] $user[surname].";
            break;
        default:
            echo "Errore.";
    }
} */

//lo switch di default esegue l'uguaglianza quando noi non specifichiamo quale operatore deve utilizzare


foreach ($users as $user) {
    switch ($user) {
        case $user['età']>18:
            echo "Sei maggiorenne\n";
            break;
        case $user['età']<18:
            echo "Sei minorenne\n";
            break;
        
        default:
            echo "Età non pervenuta.\n";
            break;
    }
}