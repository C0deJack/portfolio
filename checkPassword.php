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