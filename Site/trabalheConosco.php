<!DOCTYPE html>	
	<html>
		<meta charset="utf-8"/>
			<head>
				<title>Veneza Restaurante- Venha nos conheçer</title>
				<script>
				function Enviado()
				{
				alert("Arquivo enviado com sucesso. Obrigado")
				}
				</script>
				<link rel="stylesheet" type="text/css" href="trabalhe.css"/>	
			</head>
			<body>
				<div class="geral"><!--div da página completa-->
					<?php include "directives/navView.php"?>
						<section class="center">
								<!--Cadastro-->		
								<h2>Formulário de Cadastro</h2>
								<form><center>
									<label class="lbl">
									Nome: &nbsp <input type="text" name="nome" placeholder="Entre com seu nome" autofocus required>
									</label>
									<br>
									<label class="lbl">
									Endereço: &nbsp <input type="text" name="endereco" placeholder="Entre com seu endereço" required>
									</label>
									<br>
									<label class="lbl">
									Bairro: &nbsp <input type="text" name="bairro" placeholder="Entre com seu Bairro" required>
									</label>
									<br>
									<label class="lbl">
									Estado: &nbsp
										<select>
											<option>São Paulo</option>
											<option>Rio de Janeiro</option>
											<option>Fortaleza</option>
										</select>
									</label>
									<br>	
									<label class="lbl">
									Sexo:
									<br>
										<input type="radio" name="sex" value="masc">Masculino
										<input type="radio" name="sex" value="fem" checked>Feminino
										<input type="radio" name="sex" value="other">Outros
									<br>
									</label>
									<label class="lbl">
									Telefone Fixo: &nbsp <input type="text" name="fone" placeholder="(XX) XXXX-XXXX" required>
									</label>
									<br>
									<label class="lbl">
									Celular: &nbsp <input type="text" name="cel" placeholder="(XX) 9XXXX-XXXX" required>
									</label>
									<br>
									<label class="lbl">
									Email: &nbsp <input type="email" name="email" placeholder="Entre com seu email" required>
									</label>
									<br>
									<input type="submit" value="Enviar Cadastro" onClick="Enviado()">
								</form></center>
						</section>
				<?php include "directives/footerView.php"?>
				</div>
			</body>
	</html>
	