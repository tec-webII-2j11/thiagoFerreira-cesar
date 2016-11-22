<?php

    include "conection.php";
    
    $id = $_POST["id"];
        
    $sql = "delete from candidatos where id = $id";

    if (!mysqli_query($conection, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    } 
    
    mysqli_close($conection);
    
    header('Location: ../gestor.php');
?>