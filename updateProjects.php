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
`project_link`= :project_link WHERE `id` = :id;");

    $query2->bindParam(':project_img', $post ['project_img']);
    $query2->bindParam(':project_title', $post ['project_title']);
    $query2->bindParam(':project_text', $post ['project_text']);
    $query2->bindParam(':project_link', $post ['project_link']);
    $query2->bindParam(':id', $post ['id']);

    $query2->execute();
}