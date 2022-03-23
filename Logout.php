<?php
session_start();
// It will logout from the system
session_destroy();
header("location:Login.php")
?>