<?php 
require_once('Dog.php');

$dog1 = new Dog();
$dog1 -> setName('ぽち');
$dog1 -> setAge(5);
$dog1 -> showProfile();

$dog2 = new Dog();
$dog2 -> setName('ココ');
$dog2 -> setAge(3);
$dog2 -> showProfile();

$dog3 = new Dog();
$dog3 -> setName('ムギ');
$dog3 -> setAge(8);
$dog3 -> showProfile();

$dog4 = new Dog();
$dog4 -> setName('ソラ');
$dog4 -> setAge(12);
$dog4 -> showProfile();

?>
