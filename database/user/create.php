<?php

require_once '../../classes/autoload.php';

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password');

$newUser = new User();
$newUser->formData($name, $email, $password);
$newUser->create();