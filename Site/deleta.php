<!DOCTYPE html>	
	<html>
		<meta charset="utf-8"/>
			<head>
				<title>Veneza Restaurante- Venha nos conheçer</title>
				<link rel="stylesheet" type="text/css" href="css/trabalhe.css"/>	
			</head>
			<body>
				<div class="geral"><!--div da página completa-->
					<?php include "directives/navView.php"?>
						<section>
								<!--Cadastro-->		
								<h2>Deletar Cadastro</h2>
								<center>
									<form method="POST" action="bd/delete.php">
									<label class="lbl">
									Id: &nbsp 
									<input type="text" name="id" placeholder="Entre com o ID" autofocus required>
									</label>
									<br>
									<input type="submit" value="Deleta Cadastro">
								</form>
							</center>
						</section>
				<?php include "directives/footerView.php"?>
				</div>
			</body>
	</html>
	