<?php

$local = "localhost";
$user = "root";
$pass = "";
$db = "onlyb2b_task";


try{
    $pdo = new PDO("mysql:host=$local;dbname=$db",$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
}

?>