<?php

class CreditCard
{
    public $accountholder;
    public $expirationDate;

    function __construct($accountholder, $expirationDate)
    {
        $this->setAccountholder($accountholder);
        $this->setExpirationDate($expirationDate);
    }

    function setAccountholder($value){
        $this->accountholder =$value;
    }

    function setExpirationDate($value){
        $this->expirationDate =$value;
    }
}