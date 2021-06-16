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
        if (!is_string($value)) {
            throw new Exception("Il nome inserito non è valido");
          }
          return $this->accountholder = $value;
    }

    function setExpirationDate($value){
        if(strtotime(date($value)) < strtotime(date("d-m-Y"))){
            $this->expirationDate ="La carta è scaduta";
        }else{
            $this->expirationDate =$value;
        }

        
    }
}
