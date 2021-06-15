<?php

class User
{
    public $name;
    public $surname;
    public $email;

    function __construct($name,$surname, $email) {
        $this->setName($name);
        $this->setSurame($surname);
        $this->setEmail($email);
        
      }


    public function setName($value)
    {
        $this->name = $value;
    }

    public function setSurame($value)
    {
        $this->surname = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setEmail($value)
    {

    if (!strpos($value, "@") || !strpos($value, ".", strpos($value, "@"))) {
        $this->email = "email non valida";
        }  else {
            $this->email = $value;
        } 
    }

    public function getEmail()
    {
        return $this->email;
    }
}
