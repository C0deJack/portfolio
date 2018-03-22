<?php
session_start();

if ($_SESSION ['logged-in'] == 1) {
    header("Location: cms.php");
} elseif ( $_SESSION ['logged-in'] == 2) {
    echo 'incorrect password or username';
}  else {
    echo 'Please enter your user name and password below';
}
?>

<h3>LOGIN PAGE</h3>

<form  method="post" action="cms.php">
    <input  type="text" name="user-name">
    <input  type="password" name="password">
    <input type="submit">
</form>