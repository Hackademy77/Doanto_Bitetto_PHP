<?php 

// OOP (Object oriented programming): PHP supporta la programmazione ad oggetti
// OOP serve a struttura il codice in blocchi (classi)


// rappresetare gli utenti nella nostra piattaforma
$user = [
    "nome" => "Benedetto",
    "email" => "benedetto@gmail.com",
    "password" => "12345678"
];

$user2 = [
    "name" => "Antonio",
    "email" => "antonio@gmail.com",
    "password" => "12345678"
];

//dichiarazione
//con una classe io sto solamente descivendo come saranno i futuri oggetti di tipo User
class User{// deve essere in inglese, al singolare, la prima lettera deve maiuscola
    //dichiarando 3 attributi che saranno comuni a tutti i futuri oggetti che istanzieremo
    public $nome;
    public $email;
    public $password;

    //dichirazione di un attributo statico
    public static $counter = 0;

    //costruttore: il nome deve essere sempre __construct
    public function __construct($nome,$email,$password){//parametri formali
        //istruzioni che servono a costruire il nostro oggetto
        //per valorizzare i nostri attributi li dobbiamo richiamare
        $this->nome = $nome;//
        $this->email = $email;
        $this->password = $password;

        //accesso e modifica dell'attributo statico
        self::$counter++;
    }
    //metodi
    public function saluta(){
        echo "Ciao, $this->nome. \n";
    }

    public static function printCounter(){
        echo self::$counter;
    }
}

//abbiamo istanziato un nuovo oggetto di tipo User (la nostra classe) e richimato il costruttore
$user = new User("Mariasilvia","maria@gmail.com","12345678");
$user2 = new User("Antonio","antonio@gmail.com","12345678");
$user3 = new User("Benedetto","benedetto@gmail.com","12345678");
$user4 = new User("Emilio","emilio@gmail.com","12345678");


//gli attributi e metodi statici non hanno bisogno di un oggetto istanziato
/* User::printCounter(); */

/* $user->saluta();
$user2->saluta();
$user3->saluta();
$user4->saluta(); */



//vogliamo rappresentare degli animali
    //colore
    //cibo
    //habitat

/* class Animal{
    public $colore;
    public $cibo;
    public $habitat;

    public function __construct($colore,$cibo,$habitat){
        $this->colore = $colore;
        $this->cibo = $cibo;
        $this->habitat = $habitat;
    }
}

$animal = new Animal("nero","croccantini","casalingo","ciao"); */

//! ereditarità

class Student extends User{//questa è una classe specializzata
    public $media;
    public $matricola;
    
    public function __construct($nome,$email,$password,$media,$matricola){
        parent::__construct($nome,$email,$password);

        $this->media = $media;
        $this->matricola = $matricola;
    }
}

$student = new Student("Salvatore","salvatore@gmail.com","12345678",0,"");

print_r($student);

class Teacher extends User{
    public $stipendio;

    public function __construct($nome,$email,$password,$stipendio){
        $this->stipendio = $stipendio;

        parent::__construct($nome,$email,$password);
    }
}

$teacher = new Teacher("Donato","donato@aulab.it","12345678",50000);

print_r($teacher);