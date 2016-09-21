<!DOCTYPE html>	
	<html>
		<meta charset="utf-8"/>
			<head>
				<title>Veneza Restaurante- Venha nos conheçer</title>
				<link rel="stylesheet" type="text/css" href="avaliacao.css"/>	
				<script>
				function enviado(){
				alert("Obrigado por nos avaliar")
				}
				</script>
			</head>
			<body>
				<div class="geral"><!--div da página completa-->
					<?php include "directives/navView.php"?>
						<section>
							Avaliação:
							<br>
							<textarea name="Avaliação" rows=10 cols=55 placeholder="Escreva sua avaliação"></textarea>
							<br>
							<input type="submit" value="Enviar" onClick="enviado()">
						</section>
				<?php include "directives/footerView.php"?>
				</div>
			</body>
	</html>
	