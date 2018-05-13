<?php

/**
 * Pushes data from the projects input post up to the db
 *
 * @param $db
 *
 * @param $post
 */

function updateProjects ($db, $post)
{
    $query2 = $db->prepare("UPDATE `projects` SET 
`project_img`= :project_img, `project_title`= :project_title, `project_text`= :project_text, 
`project_link`= :project_link, `github_link`= :github_link, `title_link`= :title_link WHERE `id` = :id;");

    $query2->bindParam(':project_img', $post ['project_img']);
    $query2->bindParam(':project_title', $post ['project_title']);
    $query2->bindParam(':project_text', $post ['project_text']);
    $query2->bindParam(':project_link', $post ['project_link']);
    $query2->bindParam(':github_link', $post ['github_link']);
    $query2->bindParam(':github_link', $post ['title_link']);
    $query2->bindParam(':id', $post ['id']);

    $query2->execute();
}


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