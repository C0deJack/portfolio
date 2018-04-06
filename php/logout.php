<?php

session_start();
$_SESSION = [];
session_destroy();
?>

<h2>You have safely logged out</h2>

<a href="login.php">Click here to log back in</a><br><br>

<a href="../index.php">Or click here to go back to the Portfolio</a>