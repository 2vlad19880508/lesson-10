<?php
require_once ('Users.php');

$user = new Users('Name', '2000-05-25', 'worker', 1000);

$objectStr = serialize($user);


print_r($objectStr);

echo '<br>';

$userSerialised = unserialize($objectStr);

var_dump($userSerialised);

