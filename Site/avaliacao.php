<!DOCTYPE html>	
	<html>
		<meta charset="utf-8"/>
			<head>
				<title>Veneza Restaurante- Venha nos conheçer</title>
				<link rel="stylesheet" type="text/css" href="css/avaliacao.css"/>	
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
							<form method="POST" action="bd/coment.php">
							Avaliação:
							<br>
							<textarea name="comentario" rows=10 cols=55 placeholder="Escreva sua avaliação"></textarea>
							<br>
							<input type="submit" value="Enviar" onClick="enviado()">
							</form>
				
				<?php
                include "bd/conection.php";
                
                $sql = "select * from comentarios";
                
                $result = mysqli_query($conection, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    echo "<h2>Candidatos</h2>";
                    
                    $table = "<table align='center'> 
                                 <tr >
                                   <th>Comentario</th>
                                 </tr>";
                    
                    while($row = mysqli_fetch_assoc($result)) {
                
                        $table .= "<tr>
                                        <td>".$row["comentario"]."</td>
                                  </tr>";
                        }
                        
                        $table.= "</table>";
                        
                        echo $table;
                } else {
                    echo "<h2>Nenhum comentário encontrado</h2>";
                }
                mysqli_close($conection);
                ?>
                </section>
                </div>
                <?php include "directives/footerView.php"?>
			</body>
	</html>
	<!DOCTYPE html>	
<html>
    <meta charset="utf-8"/>
        <head>
            <title>Veneza Restaurante- Venha nos conheçer</title>
            <link rel="stylesheet" type="text/css" href="css/admin.css"/>	
        </head>
<body>
             
