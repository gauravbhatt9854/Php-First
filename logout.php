<?php
echo "log out page";
session_start();
session_destroy();
header("Location:home.php");
?>