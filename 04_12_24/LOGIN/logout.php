<?php
session_start();
session_umit();
session_destroy();
header("location:login.php");
exit()
?>