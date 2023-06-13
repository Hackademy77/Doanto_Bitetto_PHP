<?php

//abbiamo un carrello composto da:
    //prodotti e dall'importo totale
//esso deve calcolare l'importo totale 

//il prodotto a sua volta sarà formato da:
    //nome,quantità e prezzo
//esso deve calcolare il suo importo


class Carrello{
    public $prodotti;
    public $importoTot;

    //con la dependency injection stiamo dicendo che la classe Carrello dipende dalla classe Prodotto
    //infatti non possiamo istanziare un nuovo oggetto di tipo carrello senza degli oggetti di tipo Prodotto
    public function __construct(Prodotto ...$prodotti){// dependency injection
        $this->prodotti = $prodotti;
        $this->importoTot = 0;
        $this->calcolaImportoTot();
    }

    public function calcolaImportoTot(){
        foreach($this->prodotti as $prodotto){
            $this->importoTot += $prodotto->importo;
        }
    }
}

class Prodotto{
    public $nome;
    public $quantità;
    public $prezzo;
    public $importo;

    public function __construct($nome,$quantità,$prezzo){
        $this->nome = $nome;
        $this->quantità = $quantità;
        $this->prezzo = $prezzo;
        $this->calcolaImporto();
    }

    public function calcolaImporto(){
        $this->importo = $this->quantità * $this->prezzo;
    }
}



//object composition
$carrello = new Carrello(
    new Prodotto("Spaghetti", 3, 1.5),
    new Prodotto("Latte", 1, 2),
    new Prodotto("Pane", 1, 0.9),
    new Prodotto("Piatti", 2, 3)
);

print_r($carrello);
//variabile che contiene un oggetto di tipo Carrello che contiene un array di Prodotti e un importo


//!access modifiers: public, protected e private
//!essi permettono di gestire la visibilità di attributi e metodi

//? public rende accessibile in qualsiasi momento l'attributo o il metodo
//? protected rende accessibile l'attributo o il metodo all'inetno della classe e delle rispettive classi figlie
//? private rende accessibile l'attributo o il metodo solo all'inteno della classe a cui appartiene (quindi nenache nelle classi figlie)

class User{
    public $username;
    public $email;
    private $password;

    public function __construct($username,$email,$password){
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getPassword(){
        echo $this->password;
    }
}

class Teacher extends User{
    public function __construct($username,$email,$password){
        parent::__construct($username,$email,$password);
    }

    public function getPassword(){
        echo $this->password;
    }
}

$user = new Teacher("Doanto","doanto@gmail.com","123454678");
$user->getPassword();