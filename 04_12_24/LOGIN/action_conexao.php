<?php
    session_start();
    include("conexao.php");

if (empty($_POST["nome"])||
    empty($_POST["senha"])){
    echo "<script> alert('Por favor, preencha todos os campos.');
    setTimeout(function( ){ 
    window.location.href = 'login.php'; }, 2000);
    </script>",
    exit();
}
$nome=($_POST['nome']);
$senha=($_POST['senha']);

$nome=mysqli_real_escape_string($con,$_POST["nome"]);
$senha=mysqli_real_escape_string($con,$_POST["senha"]);

$query="select * from user where nome ='{$nome}'and senha = '{$senha}'";
$result=mysqli_query($con,$query);
$row=mysqli_num_rows($result);

if($row>0){
    $_session["nome"]=$nome;
    heade("location;admin.php");

    if(show>0){
        $_SESSION["nome"]=$nome;
        $_SESSION["setor"]=$retorno['setor'];
        exit();
    if($_SESSION['setor']=='admin'){
        header("location:admin.php"); 
        exit()}    
        else if($_SESSION["setor"]=="user"){
            header("location:usuario.php");
        }
        exit();
}
}

?>