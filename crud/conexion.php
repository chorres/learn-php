<?php
$hostname="localhost";
$user="root";
$ps="";
$db="api";

$conn=new mysqli($hostname,$user,$ps,$db);

if($conn->connect_error){
    die("Conexión fallida: ". $conn->connect_error);
}



?>