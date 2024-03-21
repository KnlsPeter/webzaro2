<?php
session_start();
require_once 'db.php';
extract($_POST);
$sql="select username,password as pwCrypted from users where username='{$username}' ";
try{
    $stmt=$db->query($sql);
    if($stmt->rowCount()==1){
        $row=$stmt->fetch();
        extract($row);
        $isValid=password_verify($password,$pwCrypted);
        if($isValid){
            $_SESSION["username"]=$username;
            echo json_encode(["msg"=>"ok"]);
        }else
            echo json_encode(["msg"=>"Hibás bejelentkezési adatok"]);
    }else
        echo json_encode(["msg"=>"Hibás bejelentkezési adatok"]);

}catch(exception $e){
    echo json_encode(["msg"=>"Nem sikerült az adatbáziskapcsolódás!- {$e}"]);
}



?>