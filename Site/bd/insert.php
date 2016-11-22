<?php

    include "conection.php";
    
    $name = $_POST["name"];
    $adress = $_POST["adress"];
    $broken = $_POST["broken"];
    $state = $_POST["state"];
    $sex = $_POST["sex"];
    $phone = $_POST["phone"];
    $cellphone = $_POST["cellphone"];
    
    $sql = "insert into candidatos (name, adress, broken, state, sex, phone, cellphone) values ('$name', '$adress', '$broken', '$state', '$sex', '$phone', '$cellphone')";

    if (!mysqli_query($conection, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }
    
    mysqli_close($conection);
    
    header('Location: ../index.php');

?>