<?php

/**
 * Pushes post data from about me form up to the db
 *
 * @param $db
 * @param $email_out
 * @param $phone_out
 * @param $about_out
 */

function updateAboutMe ($db, $email_out, $phone_out, $about_out)
{
    $query2 = $db->prepare("UPDATE `cms` SET `deleted`= 1;");

    $query3 = $db->prepare("INSERT INTO `cms` (`email`, `phone`, `about`)
VALUES (:email_out, :phone_out, :about_out);");

    if (!empty($email_out || $phone_out || $about_out)) {
        $query2->execute();
    }

    $query3->bindParam(':email_out', $email_out);
    $query3->bindParam(':phone_out', $phone_out);
    $query3->bindParam(':about_out', $about_out);

    $query3->execute();
}


/**
 * Gets existing data of About me from db
 *
 * @param $db
 *
 * @return mixed - Array
 */

function getAboutMe($db)
{
    $query = $db->prepare("SELECT `email`, `phone`, `about`
FROM `cms` WHERE `deleted` = 0 ORDER BY `id` DESC LIMIT 1;");
    $query->execute();
    $result = $query->fetch();
    return $result;
}