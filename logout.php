<?php
session_start();  
session_destroy();

Header("Location: login.php");
?>

<SCRIPT LANGUAGUE="javscript">
    location.href = "login.php";
</SCRIPT>