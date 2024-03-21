<?php
session_start();
require_once 'db.php';
extract($_POST);
$pw=password_hash($password,PASSWORD_DEFAULT);
$sql="insert into  users (username,email,password) values ('{$username}','{$email}','{$pw}')";
try{
    $stmt=$db->exec($sql);
    echo json_encode(["msg"=>"Sikeres regisztráció! Jelentkezz be!","id"=>"{$db->lastInsertId()}"]);
}catch(exception $e){
    echo json_encode(["msg"=>"Nem sikerült a regisztráció!- {$e}"]);
}

?>