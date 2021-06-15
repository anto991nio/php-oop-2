<?php

class Premium extends User
{
    public $discount;
    public $signedYears;


    function __construct($name,$surname, $email,$signedYears )
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
}
