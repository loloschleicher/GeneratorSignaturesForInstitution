<?php
session_start();
?>
<?php 

$name=$_POST['name']; 
$pass=$_POST['pass']; 

if(empty($name) || empty($pass)){
    header("Location: login.php");
    exit();
    }

if($name == "marketing" && $pass == "lavalle50"){
    $_SESSION['name'] = "marketing";
    header("Location: mostrar.php");
}else{
    header("Location: login.php");
}






?>