<?php

class Premium extends User
{
    public $discount;
    public $signedYears;


    function __construct($name,$surname, $email, $signedYears )
    {
        parent::__construct($name, $surname, $email);
        $this->setSignedYears($signedYears);
        $this->setDiscount($signedYears);
    }

    function setSignedYears($value){
        $this->signedYears=$value;

    }

    function setDiscount($value){
        $this->discount = $value * 5;

    }

    public function renderUserPremium() {
        parent::renderUser();
        echo "<p>Sconto applicato:" . " " . $this->discount .  "</p>";
        echo "<p>Iscritto da anni:" . " " . $this->signedYears .  "</p>";

      }
}
