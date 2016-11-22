<?php

    include "conection.php";
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $broken = $_POST["broken"];
    $state = $_POST["state"];
    $sex = $_POST["sex"];
    $phone = $_POST["phone"];
    $cellphone = $_POST["cellphone"];
    
    $sql = "update candidatos set name = '$name', adress = '$adress', broken = '$broken', state = '$state', sex = '$sex', phone = '$phone', cellphone = '$cellphone' where id = $id";

    if (!mysqli_query($conection, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }
    
    mysqli_close($conection);

    header('Location: ../gestor.php');
?>