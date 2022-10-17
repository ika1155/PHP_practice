<?php 
require_once('Dog.php');

$dog1 = new Dog();
$dog1 -> setName('ぽち');
$dog1 -> setAge(5);
$dog1 -> setType('柴犬');
$dog1 -> showProfile();
?>
