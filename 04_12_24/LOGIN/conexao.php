<?php
$host="127.0.0.1";
$usuario="root";
$senha="";
$bd="php";

$con= new mysqli($host,$usuario,$senha,$bd);

if($con->connect_errno){
    echo  "Falha na Conexão:(".$con->connect_error.")".$con->connect_error;

}
echo $con->host_info."/n";




?>