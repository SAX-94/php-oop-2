<?php 

class User 
{
    public $name;
    public $surname;
    public $email;
    public $login = false;

    public function __construct(string $Name, string $cogName, string $email, bool $login){
        $this->name = $Name;
        $this->surname = $cogName;
        $this->email = $email;
        $this->login = $login;
    }
}

?>