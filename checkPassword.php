<?php


/**
 * Gets user and password from db to be checked
 *
 * @param $db
 * @param $userIn
 *
 * @return mixed
 */

function getPassword ($db, $userIn) {
    $query = $db->prepare("SELECT `password` , `user` FROM `users` WHERE `user`=:user;");
    $query->bindParam(':user', $userIn);
    $query->execute();
    $out = $query->fetch();
    return $out;
}


/**
 * Checks the input password against the stored hashed password.
 *
 * @param $passwordOut
 * @param $passwordIn
 * @param $userOut
 *
 * @return string
 */

function verifyPassword($passwordOut, $passwordIn, $userOut)
{
    if (password_verify($passwordIn, $passwordOut)) {
        $_SESSION ['logged-in'] = 1;
        return "Welcome $userOut ! How are you today?";
    } else {
        $_SESSION ['logged-in'] = 2;
        header("Location: login.php");
    }
}