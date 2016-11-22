<!DOCTYPE html>	
<html>
    <meta charset="utf-8"/>
        <head>
            <title>Veneza Restaurante- Venha nos conheçer</title>
            <link rel="stylesheet" type="text/css" href="css/index.css"/>	
        </head>
<body>
    <div class="geral">
        <?php include "directives/navView.php";?>
            <section class="center">
                <form style="padding: 300px;" action="login.php" method="POST">
                    <p style="text-align: center;">Usuário:<br/><input type="text" name="usuario" value="" id="usuario"/></p>
                    <p style="text-align: center;">Senha:<br/><input type="password" name="senha" value="" id="senha"/></p>
                    <p style="text-align: center;"><input type="submit" value="LOGIN"/></p>
                </form>
            </section>
        <?php include "directives/footerView.php";?>
        </div>
    </body>
</html>