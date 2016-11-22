<!DOCTYPE html>	
<html>
    <meta charset="utf-8"/>
        <head>
            <title>Veneza Restaurante- Venha nos conheçer</title>
            <link rel="stylesheet" type="text/css" href="css/admin.css"/>	
        </head>
<body>
    <div class="geral">
        <?php include "directives/navView.php";?>
            <section class="center">
                <?php
                include "bd/conection.php";
                
                $sql = "select * from candidatos";
                
                $result = mysqli_query($conection, $sql);
                
                if (mysqli_num_rows($result) > 0) {
                    echo "<h2>Candidatos</h2>";
                    
                    $table = "<table align='center'> 
                                 <tr >
                                   <th>Id</th>
                                   <th>Nome</th>
                                   <th>Endereço</th>
                                   <th>Bairro</th>
                                   <th>Estado</th>
                                   <th>Sexo</th>
                                   <th>Telefone</th>
                                   <th>Celular</th>
                                 </tr>";
                    
                    while($row = mysqli_fetch_assoc($result)) {
                
                        $table .= "<tr>
                                        <td>".$row["id"]."</td>
                                        <td>".$row["name"]."</td>
                                        <td>".$row["adress"]."</td>
                                        <td>".$row["broken"]."</td>
                                        <td>".$row["state"]."</td>
                                        <td>".$row["sex"]."</td>
                                        <td>".$row["phone"]."</td>
                                        <td>".$row["cellphone"]."</td>
                                  </tr>";
                        }
                        
                        $table.= "</table>";
                        
                        echo $table;
                } else {
                    echo "<h2>Nenhum candidato cadastrado</h2>";
                }
                mysqli_close($conection);
                ?>
            </section>
        <?php include "directives/footerView.php";?>
        </div>
    </body>
</html>