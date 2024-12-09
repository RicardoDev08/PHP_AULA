<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SESSION['setor']!='admin'){
        header("location:login.php");
        include("vericacao.php");
    }
    exit();
    session_start();
    <h5><?php
        echo "nome = ".$_SESSION['nome']"<br>":
        echo "setor = ".$SESSION['setor']"<br>":
        "<a href="sair"></a>"
    ?></h5>

    <form method="POST" action="action_user.php">
        Nome <input type="text" name = "first_name"id="fn">
        Nome <input type="text" name = "last_name" id ="ln">
        Nome <input type="text" name = "fone" id="fone" id="fone">
        Nome <input type="text" name = "address" id="add">
        Nome <input type="text" name="email" id="email">
        Nome <input type="text" name ="sexo"id="sexo">
        Nome <input type="text" name="sub"id="">
        </form>
        
</body>
</html>