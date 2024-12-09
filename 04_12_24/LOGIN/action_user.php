<?php
if ($_SESSION['setor']!='admin'){
    header("location:login.php");
    include("vericacao.php");
}
include("conexao.php");
sesssion_start();
exit();

$first_name = mysqli_real_escape_string

$query_insert = "insert into clientes values(null,'{$first_name}','{$last_name}','{$sexo}','{$fone}','{$address}','{$email}');";
echo $query_insert;
$result_insert=mysqli_query($con,$query_insert);
if ($result_insert==''){
    echo "<script language:'javascript'>
window.alert('Não foi possivel efetuar o cadastro');
window.location.href='user.php';</script>"   
}
else
{
    echo"<script language:'javascript'>
    window.alert('cadastro efetuado com sucesso');
    window.location.href='user.php';</script>";
    exit();

}
?>