<?php
session_start();

require 'loginCheck.php';

$session = $_SESSION['logged-in'];

echo loginCheck($session);

?>

<h3>LOGIN PAGE</h3>

<form  method="post" action="cms.php">
    <input  type="text" name="user-name">
    <input  type="password" name="password">
    <input type="submit">
</form>