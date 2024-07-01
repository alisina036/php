<?php
require("database.php");

session_start();

echo $_SESSION['name'];
?>