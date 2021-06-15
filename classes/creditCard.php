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
        if(strtotime(date($value)) < strtotime(date("d-m-Y"))){
            $this->expirationDate ="La carta è scaduta";
        }else{
            $this->expirationDate =$value;
        }

        
    }
}
