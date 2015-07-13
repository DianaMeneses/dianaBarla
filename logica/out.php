<?php

session_start();

include '../myClass/securityClass.php';

use Barla\securitySystem as security;

$security = new security\securityClass();
$security->logout();

header('Location: ../index.php');