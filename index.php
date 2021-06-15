<?php
include  "./classes/user.php";
include  "./classes/userPremium.php";



$user1= new User("antonio", "Cardone", "antonio@gmail.com");
$userPremium= new Premium("antonio", "Cardone", "antonio@gmail.com",1);

var_dump($user1);
var_dump($userPremium);


