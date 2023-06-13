<?php

//!classi astratte: rappresentano il concetto più astratto e detta regole che devono essere rispettate da tutte le classi figlie

//persone
/* abstract class Person
{
    public $nome;
    public $cognome;
    public $eta;

    public function __construct($nome, $cognome, $eta)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    abstract public function saluta();
} */

//studenti
/* class Student extends Person
{
    public $media;

    public function __construct($nome, $cognome, $eta, $media)
    {
        parent::__construct($nome, $cognome, $eta);

        $this->media = $media;
    }
    //stiamo effettuando un overide del metodo saluta presente nella classe genitore (Person)(polimorfismo)
    //l'overide avviene quando nella classe figlia viene dichiarato un metodo con lo stesso nome del metodo della classe genitore
    public function saluta()
    {
        echo "Ciao sono $this->nome e ho una media di $this->media";
    }
} */

//docenti
/* class Teacher extends Person
{
    public $stipendio;

    public function __construct($nome, $cognome, $eta, $media)
    {
        parent::__construct($nome, $cognome, $eta);

        $this->stipendio = $media;
    }

    public function salutaDocencete()
    {
        echo "Ciao sono $this->nome e ho una media di $this->stipendio";
    }

    public function getStipendio()
    {
        echo $this->stipendio;
    }
} */


/* $student = new Student("Andrea", "Palermo", 29, 8);
/* $student->saluta(); */
/* print_r($student);

$docente = new Teacher("Doanto", "Bitetto", 26, 50000000);
$docente->saluta();  */ 


//! dependency injection (inizione di dipendenze): ci permette di far dipendere il funzionamento di una classe dal funzionamento di un'altra classe

//vogliamo che una persona possa attaccare. Ma come? Attacchiamo con gli arti superiori
//vogliamo che una persona possa muoversi. Come? Con gli arti inferiori



abstract class Braccia{
    abstract public function attacco();
}

class Pugno extends Braccia{
    public function attacco(){
        echo "Ti attacco tirandoti un pugno!";
    }
}
class Ceffone extends Braccia{
    public function attacco(){
        echo "Ti attacco tirandoti un ceffone!";
    }
}

class Gambe{
    public function muoviti(){
        echo "Sto camminando";
    }
}

class Person{
    public $artiSuperiori;
    public $artiInferiori;

    public function __construct(Braccia $braccia, Gambe $gambe){// qui stiamo applicando la dependency injection
        $this->artiSuperiori = $braccia;
        $this->artiInferiori= $gambe;
    }

    public function effettuaAttacco(){
        $this->artiSuperiori->attacco();
    }  
    
    public function effettuaMovimento(){
        $this->artiInferiori->muoviti();
    }
}


$manichino = new Person(new Ceffone(),new Gambe());
$manichino->effettuaAttacco();
$manichino->effettuaMovimento();

//manichino può attacare e muoversi
//attaccare può essere un pugno o un ceffone



//utenti,prodotti,il carrello,ruoli