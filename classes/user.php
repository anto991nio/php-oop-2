<?php

class User
{
  public $name;
  public $surname;
  public $email;
  public $creditCard;
  public $id;


  function __construct($name, $surname, $email)
  {
    $this->setName($name);
    $this->setSurame($surname);
    $this->setEmail($email);

    $this->generateUserId();
  }


  public function setName($value)
  {
    if (!is_string($value)) {
      throw new Exception("Il nome inserito non è valido");
    }
    return $this->name = $value;
  }

  public function setSurame($value)
  {
    if (!is_string($value)) {
      throw new Exception("Il Cognome inserito non è valido");
    }
    return $this->surname = $value;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setEmail($value)
  {

    if (!strpos($value, "@") || !strpos($value, ".", strpos($value, "@")) || !is_string($value)) {
      throw new Exception("L'email inserita non è valida");
    }
    return $this->email = $value;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function insertCreditCard($c)
  {
    $this->creditCard = $c->accountholder . " " . $c->expirationDate;
  }

  public function renderUser()
  {
    echo "<h2>Nome Cliente:" . " " . $this->name . "</h2>";
    echo "<h2>Cognome Cliente:" . " " . $this->surname .  "</h2>";
    echo "<p>Email:" . " " . $this->email .  "</p>";
    echo "<p>Dati Carta di Credito:" . " " . $this->creditCard .  "</p>";
    echo "<p>ID:" . " " . $this->id .  "</p>";
  }



  private function generateUserId()
  {
    $string = $this->name . $this->email;
    $idLength = 12;

    $userId = "";

    while (strlen($userId) <  $idLength) {
      $randNum = rand(0, strlen($string));
      $char = substr($string, $randNum, 1);
      $invalidChars = [".", "@"];

      if (!in_array($char, $invalidChars)) {
        $userId .= $char;
      }
    }

    $this->id = strtolower($userId) . time();
  }
}
