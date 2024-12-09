<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <?php
    session_start();
    include("vericacao.php");
    
    if($_SESSION['setor']!='admin'){
        header("location:index.php")
    exit();    
    }
    if ($_SESSION['setor']!='admin'){
        header("location:login.php");
        exit();
    }
    ?>
    PÁGINA ADMIN
    <a href="logout.php">Sair</a>


  
</body>
</html>