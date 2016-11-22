<?php
	
	if (isset($_POST["usuario"])) {
			$username = $_POST['usuario'];
			$password = md5($_POST['senha']);
			
			$senha_admin = md5('1234');
   
			session_start();
			$_SESSION['usuario'] =  strip_tags($username);
			$_SESSION['senha'] = strip_tags($password);
			if (isset($_SESSION['usuario'])&& isset($_SESSION['senha'])) {
            
            if($_SESSION['usuario'] == 'admin' && $_SESSION['senha']== $senha_admin){
			header('Location: gestor.php');
            }
            else{
                echo 'Usuário ou senha inválidos!';
                header('Location: trabalheConosco.php');
			}
    }
    }
 
?>