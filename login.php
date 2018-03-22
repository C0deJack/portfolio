<?php
session_start ();
$session = $_SESSION ['logged-in'];

if ($session === 1) {
    header("Location: cms.php");
} elseif ( $session === 2) {
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