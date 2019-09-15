<?php
error_reporting(E_ALL);

include ('Users.php');

$user1 = new Users('Иван', '10.10.2010', 'manager', 1000);


var_dump($user1);

$user2 = clone $user1;
$user2->setPosition('worker'); // заменяем Position
$user2->setSalary(2000);


var_dump($user2);

var_dump(Users::getCountUser());

Users::setCountUser(0);
var_dump(Users::getCountUser());