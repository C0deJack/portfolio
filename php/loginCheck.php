<?php

/**
 * Checks id user is already logged in or
 * entered the correct password
 *
 * @param $session
 *
 * @return string
 */

function loginCheck ($session)
{
    if ($session == 1) {
        header("Location: cms.php");
    } elseif ($session == 2) {
        return 'incorrect password or username';
    } else {
        return 'Please enter your user name and password below';
    }
}