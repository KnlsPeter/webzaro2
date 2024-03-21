<?php
session_start();
require_once 'db.php';
extract($_GET);
if(isset($_GET['username']))
    $sql="select count(*) nr from users where username='{$username}'";
else
    $sql="select count(*) nr from users where email='{$email}'";
try{
    $stmt=$db->query($sql);
    echo json_encode($stmt->fetch(
        
    ));
}catch(exception $e){
    echo json_encode(["msg"=>"Nem sikerült a regisztráció!- {$e}"]);
}



?>