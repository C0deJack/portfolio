<?php

$db = new PDO('mysql:host=127.0.0.1; dbname=jackdb', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC);

$query1= $db->prepare("SELECT `project_id`, `project_img`, 
`project_title`,`project_text`, `project_link` FROM `projects` WHERE 
`project_delete` = 0 ORDER BY `project_id` ASC;");

$query1->execute();

$project_title = $_POST ['project_title'];
$project_id= $_POST ['project_id'];

$result1 = $query1->fetchAll();

function createProjectForm($result1)
{
    $result_output = "";
    foreach ($result1 as $list) {
        $result_output .=  "<form method='post' action='cms.php'>
    <input type='hidden' value='" . $list['project_id'] . "'>" . $list['project_id'] . "
    <input type='text' class='project_form' size='35' value='" . $list ['project_title'] . "
    ' name='project-title'>Project Title (max 100 characters)
    <textarea rows='6' cols='80' class='project_form' size='35' value='" . $list ['project_text'] . "
    ' name='project-text'></textarea>Project Description (max 2000 characters)
    <input type='text' class='project_form' size='35' value='" . $list ['project_img'] . "
    ' name='project-img'>Image file name
    <input type='text' class='project_form' size='35' value='" . $list ['project_link'] . "
    ' name='project-link'>Project link URL
    <input type='submit' value='update'>
    </form>";
    }
    return $result_output;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="cms.css">
    <title>Portfolio Input Page</title>
</head>
<body>
<h3>Welcome to the Projects Input Page</h3>

<nav>
    <a href="cms.php">Link to About Me Input Page</a><br><br>
</nav>
</body>
</html>

<?php

echo createProjectForm($result1);
var_dump($project_id, $project_title);

?>