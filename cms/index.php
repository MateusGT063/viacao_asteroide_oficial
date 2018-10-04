<?php 
if(!isset($_SESSION))
{
   session_start();
}

if(isset($_GET['pagina'])){
    $_SESSION['pagina'] = $_GET['pagina'];
    
}

if(isset($_SESSION['pagina'])){
    
}else{
    $_SESSION['pagina'] = "bem_vindo.php";
}

require_once("view/partida.php"); 
?>