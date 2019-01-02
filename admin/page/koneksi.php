<?php

$server  ='localhost';
$user    ='root';
$pass    ='';
$db_name ='dbkasus';

try{
    $con=new PDO("mysql:host=$server;dbname=$db_name",$user,$pass);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOException $exception){
    echo 'Error !! : ' . $exception->getMessage();
}

?>