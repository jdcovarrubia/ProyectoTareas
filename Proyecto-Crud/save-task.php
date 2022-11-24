<?php

include("db.php");

if (isset($_POST['save-task'])){

    $titulo =  $_POST['title'];

    $descripcion = $_POST['descripcion'];

    $date = $_POST['date'];


    $query = "INSERT INTO tareas (titulo, descripcion, fecha) VALUES ('$titulo', '$descripcion', '$date')";

    $result = mysqli_query($conn, $query);

    if(!$result){

        die("Query Failed");

    }   

    $_SESSION['message'] = 'Tarea guardada correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");

}

?> 