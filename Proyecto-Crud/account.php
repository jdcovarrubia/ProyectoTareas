<?php

include ("db.php");

if(!empty($_POST['correo'] && !empty($_POST['clave']))){

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $sql = "INSERT INTO users (correo, clave) VALUES ('$correo','$clave')";

    $result = mysqli_query($conn, $sql);

    if(!$result){

        die("Query Failed");

    }   

    header("Location: login.php");
}

?>