<?php
session_star();
if(!$_SESSION['nome']){
    header("location;login.php");
    exit();
}
?>