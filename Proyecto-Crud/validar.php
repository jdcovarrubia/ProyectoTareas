<?php

include ("db.php");
include("login.php");


    $message = '';

    $correo = $_POST['correo'];
    $password =$_POST['clave'];

    $consulta = "SELECT * FROM users WHERE correo = '$correo' and clave ='$password' ";

    $resultado = mysqli_query($conn, $consulta);

    $filas = mysqli_num_rows($resultado);

    if($filas){
        header("location: index.php");
    }
    else{
        $message = 'Papi te equivocaste, arregla algo';
    }
    mysqli_free_result($resultado);
    mysqli_close($conn);

?>