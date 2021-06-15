<?php
include  "./classes/user.php";
include  "./classes/userPremium.php";
include  "./classes/creditCard.php";




$user1= new User("antonio", "Cardone", "antonio@gmail.com");
$userPremium= new Premium("antonio", "Cardone", "antonio@gmail.com",1);
$cartaDiCredito= new CreditCard("Antonio Cardone", "28/08/2022");

$user1->insertCreditCard($cartaDiCredito);
$userPremium->insertCreditCard($cartaDiCredito);


var_dump($user1);
var_dump($userPremium);




