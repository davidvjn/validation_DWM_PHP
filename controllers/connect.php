<?php

session_start();

$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['password'] = $_POST['password'];

header('Location: /');