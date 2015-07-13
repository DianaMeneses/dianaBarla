<?php

session_start();

include '../myClass/userClass.php';
include '../myClass/securityClass.php';

use Barla\userSystem as user;
use Barla\securitySystem as security;

$user = filter_input(INPUT_POST, 'user');
$pass = filter_input(INPUT_POST, 'pass');

$userSystem = new user\userClass();
if ($userSystem->validate($user, $pass) === true) {
  $security = new security\securityClass();
  $security->login();
  header('Location: ../menu.php');
} else {
  header('Location: ../index.php?user=false');
}