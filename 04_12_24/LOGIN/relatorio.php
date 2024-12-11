<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
    if($_SESSION['setor']!='admin'){
        header("location:index.php")
        exit();}    
    include ("conexao.php");
    $query = "select * from produtos";
    $result = mysqli_query($con,$query);
    $retorno = mysql_fetch_array($result);
    echo $retorno["id"];
    echo $retorno["nome"];
    echo $retorno["descricao"];
    echo $retorno["valor"];
    <table border ="1">
    <thead>
    <tr>
    <th>id</th>
    <th>Nome</th>
    <th>descricao</th>
    <th>Valor</th>
    </tr>
    </thead>
    <?php while($retorno = mysqli_fetch_array($result)){
    ?>
    <tbody>
    <tr>
    <td><?php echo $retorno["id"];?</td>
    <td><?php echo $retorno["Nome"];?</td>
    <td><?php echo $retorno["Descricao"];?</td>
    <td><?php echo $retorno["valor"];?</td>

    </tr>
    <?php}?>
    </tbody>
    </table>
        
    ?>
</body>
</html>