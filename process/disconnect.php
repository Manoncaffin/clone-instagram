<?php

session_start();

$_SESSION['id'] = '';
$_SESSION['pseudo'] = '';


header('Location: ../pages/user_connect.php');