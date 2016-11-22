<?php

    include "conection.php";
    
    $comentario = $_POST["comentario"];
    
    
    $sql = "insert into comentarios (comentario) values ('$comentario')";

    if (!mysqli_query($conection, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conection);
    }
    
    mysqli_close($conection);

?>