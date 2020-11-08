<?php

$dsn = 'mysql:host=localhost;dbname=disco';
$user='root';$pass='root';
$pdo = new \PDO($dsn, $user, $pass);

function isValid($email,$password,$pdo){
    

    $sql = "SELECT email,password FROM utilisateurs WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email',$email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if(count($result) > 0){
        if($result[0]['password'] == $password){
            return true;
        }
    }

    return false;
}

