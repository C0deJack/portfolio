<?php

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
FROM `cms` WHERE `deleted` = 0;");
    $query->execute();
    $result = $query->fetch();
    return $result;
}

/**
 * Gets existing data of Projects from db
 *
 * @param $db
 *
 * @return mixed - Array
 */

function getProjects($db)
{
    $query1 = $db->prepare("SELECT `id`, `project_img`, `project_altImgText`,
`project_title`, `project_text`, `project_link`, `github_link` FROM `projects` 
ORDER BY `id` ASC;");

    $query1->execute();
    $result1 = $query1->fetchAll();
    return $result1;
}