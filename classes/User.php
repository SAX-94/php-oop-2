<?php 

trait User 
{
    public $name;
    public $surname;
    public $email;
    public $login = false;

    public function __construct(string $name, string $cognome, string $email, bool $login){
        $this->name = $name;
        $this->surname = $cognome;
        $this->email = $email;
        $this->login = $login;
    }
}

?>