<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
unset($_SESSION["status"]);
unset($_SESSION["type"]);
header("Location:../../index.php");
?>