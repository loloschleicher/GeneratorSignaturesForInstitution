
<?php

$con = mysqli_connect('localhost','mundocue_userapp','%Ucp_/MkT#','mundocue_apps');
$sql= "ALTER TABLE registro_firma ADD id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT  ";
//"ALTER TABLE registro_firma DROP id"
//"ALTER TABLE registro_firma AUTO_INCREMENT=100"
// CHANGE id id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
mysqli_query($con,"ALTER TABLE registro_firma ADD id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT");

?>