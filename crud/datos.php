<?php

include "conexion.php";

if(!empty($_POST["enviar"])){
   $nombre=$_POST["nombre"];

    $sql=$conn->query("INSERT INTO datos(nombre) VALUES('$nombre')");
    if($sql>0){
        header("location: index.php");
     }else{
        echo "no envio datos";
     }
}

?>