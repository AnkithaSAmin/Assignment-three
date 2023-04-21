<?php 

$sName = "localhost";
$uName = "ankitha";
$pass = "ankitha28";
$db_name = "ankitha_auth_db1";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}