<?php
include 'Product.php';
include 'Client.php';
include 'Cart.php';

$p1 = new Product("Iofone", "1.jpg", "Good Phone", "10$");
$p2 = new Product("BaFone", "1.jpg", "Nice Phone", "520$");

$client1 = new Client('Ion', 'Email@email.com', 'mypassword', '1.jpg');
$cart1 = new Cart($client1);

$cart1->addProduct(new Product("Iofone", "1.jpg", "Good Phone", "10$"));
$cart1->addProduct(new Product("BaFone", "1.jpg", "Nice Phone", "520$"));


// var_dump($cart1);

print $cart1->toHTML() ;
?>