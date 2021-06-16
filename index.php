<?php
require_once  "./classes/user.php";
require_once  "./classes/userPremium.php";
require_once "./classes/creditCard.php";
require_once "./classes/product.php";




try {
    $user1 = new User("aaa", "Cardone", "antonio@gmail.com");
    $userPremium = new Premium("Mario", "Rossi", "mariorossi@gmail.com", 10);
    $cartaDiCredito = new CreditCard("Antonio Cardone", "28-08-2022");
    $prodotto = new Product("X", "IPhone", "$999.00");
    $user1->insertCreditCard($cartaDiCredito);
    $userPremium->insertCreditCard($cartaDiCredito);
    $user1->renderUser();
    echo "<hr>";
    $userPremium->renderUserPremium();
    echo "<hr>";
    $prodotto->renderProduct();
    echo "<hr>";
} catch (Exception $e) {
    echo $e->getMessage();
}
