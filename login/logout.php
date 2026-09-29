<?php 
if(session_status() == PHP_SESSION__NONE){
    session_start();
}
$_SESSION = array();
session_destroy();
header("Location: /miniSistema/index.php");
exit;
?>