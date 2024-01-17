<?php

$name = $_POST['name']; // test
$email = $_POST['email'];
$password = $_POST['psw'];
$passwordRep = $_POST['psw-repeat'];

$pdo = new PDO("pgsql:host=db;dbname=dbtest", "dbuser", "dbpwd");

$pdo->exec("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");


