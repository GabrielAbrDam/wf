<?php
$password='azertyqwerty';
$salt='salt';
$myfirstPassLength = floor(strlen($password)/2) + (strlen($password) % 2);
$mySecondPassLength = ceil(strlen($password)/2);

$myfirstPass = substr($password, 0,  $myfirstPassLength);
$mysecondPass = substr($password, $myfirstPassLength, $mySecondPassLength);

$saltedPassword = $myfirstPass . $salt . $mysecondPass;

