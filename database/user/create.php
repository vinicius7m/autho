<?php

require_once '../../classes/autoload.php';

$name = "Vinícius";
$email = "vinicius.vsm777@gmail.com";
$password = "girafaverde";

$newUser = new User();
$newUser->formData($name, $email, $password);
$newUser->create();