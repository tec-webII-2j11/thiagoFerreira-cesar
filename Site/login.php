<?php
	
	if (isset($_POST["usuario"])) {
			$username = $_POST['usuario'];
			$password = $_POST['senha'];
			
   
			session_start();
			$_SESSION['usuario'] =  strip_tags($username);
			$_SESSION['senha'] = strip_tags($password);
			if (isset($_SESSION['usuario'])&& isset($_SESSION['senha'])) {
            
            if($_SESSION['usuario'] == 'adm' && $_SESSION['senha']=='1234'){
			header('Location: gestor.php');
            }
            else{
                echo 'Usuário ou senha inválidos!';
			}
    }
    }
 
?>