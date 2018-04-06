<?php

session_start();
require('connect.php');
require('upload.php');
require('download.php');

if ($_SESSION ['logged-in'] !==1) {
    header("Location: login.php");
}

$db = connect();
$result1 = getProjects($db);

$post = $_POST;
updateProjects($db,$post);

/**
 * Function dynamically creates the project input forms with the given database
 *
 * @param $result1 - Array from jackdb database
 * @return string - html code output
 */
function createProjectForm(array $result1)
{
    $result_output = "";
    foreach ($result1 as $list) {
        $result_output .=  "<form method='post' action='projects.php'>
    <input type='hidden' name='id' value='" . $list['id'] . "'>" . $list['id'] . "
    <input type='text' class='project_form' size='35' value='" . $list ['project_title'] . "
    ' name='project_title'>Project Title (max 100 characters)
    <textarea rows='6' cols='80' class='project_form' 
    name='project_text'>" . $list ['project_text'] . "</textarea>
    Project Description (max 2000 characters)
    <input type='text' class='project_form' size='35' value='" . $list ['project_img'] . "
    ' name='project_img'>Image file name
    <input type='text' class='project_form' size='35' value='" . $list ['project_link'] . "
    ' name='project_link'>Project link URL
    <input type='submit' value='update'>
    </form>";
    }
    return $result_output;
}

$result1 = getProjects($db);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="../css/cms.css">
    <title>Portfolio Input Page</title>
</head>
<body>
<h3>Welcome to the Projects Input Page</h3>
<nav>
    <a href="cms.php">Link to About Me Input Page</a><br><br>
</nav>
</body>
</html>

<?php echo createProjectForm($result1); ?>

<h4>Logout</h4>
<form method="post" action="logout.php">
    <input type="hidden" name="logout">
    <input type="submit" value="logout">
</form>
