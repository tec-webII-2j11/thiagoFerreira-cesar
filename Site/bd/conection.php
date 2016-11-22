<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "tecweb2";

// Create connection
$conection = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!mysqli_set_charset($conection, "utf8")) {
	printf("Erro ao configurar caracter utf8: %s\n", mysqli_error($conection));
} else {
	mysqli_character_set_name($conection);
} 

?>