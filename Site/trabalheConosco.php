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
								<h2>Formulário de Cadastro</h2>
								<center>
									<form method="POST" action="bd/insert.php">
									<label class="lbl">
									Nome: &nbsp 
									<input type="text" name="name" placeholder="Entre com seu nome" autofocus required>
									</label>
									<br>
									<label class="lbl">
									Endereço: &nbsp 
									<input type="text" name="adress" placeholder="Entre com seu endereço" required>
									</label>
									<br>
									<label class="lbl">
									Bairro: &nbsp 
									<input type="text" name="broken" placeholder="Entre com seu Bairro" required>
									</label>
									<br>
									<label class="lbl">
									Estado: &nbsp
									<input type="text" name="state" placeholder="Estado" required>
									</label>
									<br>	
									<label class="lbl">
									Sexo: &nbsp
									<input type="text" name="sex" placeholder="M ou F" required>
									</label>
									<br>
									<label class="lbl">
									Telefone Fixo: &nbsp 
									<input type="text" name="phone" placeholder="XXXXXXXXX">
									</label>
									<br>
									<label class="lbl">
									Celular: &nbsp
									<input type="text" name="cellphone" placeholder="9XXXXXXXX" required>
									</label>
									<br>
									<label class="lbl">
									Email: &nbsp 
									<input type="text" name"contact" placeholder="Entre com seu email" required>
									</label>
									<br>
									<input type="submit" value="Enviar Cadastro">
								</form>
							</center>
						</section>
				<?php include "directives/footerView.php"?>
				</div>
			</body>
	</html>
	