<?php
$dsn = 'mysql:host=localhost;dbname=disco';
$user='root';$pass='root';
$pdo = new \PDO($dsn, $user, $pass);

$email = 'yvon@gmail.com';

$sql = "SELECT email,password FROM utilisateurs WHERE email = :email";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':email',$email);

$stmt->execute();

$result = $stmt->fetchAll();

var_dump($result);