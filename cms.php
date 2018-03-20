<?php
$db = new PDO('mysql:host=127.0.0.1; dbname=jackdb', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC);

$query= $db->prepare("SELECT `email`, `phone`, `about`
FROM `cms` WHERE `deleted` = 0 ORDER BY `id` DESC LIMIT 1;");

$query1= $db->prepare("SELECT `project_id`, `project_img`, 
`project_title`,`project_text`, `project_link` FROM `projects` WHERE 
`project_delete` = 0 ORDER BY `project_id` ASC;");

$query2= $db->prepare("UPDATE `cms` SET `deleted`= 1;");

$query3= $db->prepare("INSERT INTO `cms` (`email`, `phone`, `about`)
VALUES (:email_out, :phone_out, :about_out);");


$query1->execute();


if (!empty($_POST)) {
    $query2->execute();
}

$email_out = $_POST ['email_out'];
$phone_out = $_POST ['phone_out'];
$about_out = $_POST ['about_out'];

$query3->bindParam(':email_out', $email_out);
$query3->bindParam(':phone_out', $phone_out);
$query3->bindParam(':about_out', $about_out);

$query3->execute();

$query->execute();

$result = $query->fetch();
$result1 = $query1->fetchAll();

$email = $result ['email'];
$phone = $result ['phone'];
$about = $result ['about'];


function createProjectForm($result1)
{
    $result_output = "";
    foreach ($result1 as $list) {
        $result_output .=  "<form method='post' action='cms.php'>
    <option value='" . $list['project_id'] . "'>" . $list['project_id'] . "</option>
    <input type='text' class='project_form' size='35' value='" . $list ['project_img'] . "
    ' name='project-img'>Image file name
    <input type='text' class='project_form' size='35' value='" . $list ['project_title'] . "
    ' name='project-title'>Project Title (max 100 characters)
    <input type='text' class='project_form' size='35' value='" . $list ['project_text'] . "
    ' name='project-text'>Project Description (max 2000 characters)
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
    <h3>Welcome to the Portfolio Input Page</h3>

    <form method="post" action="cms.php">
        <input type="text" value="<?php echo $email; ?>" name="email_out">email
        <input type="tel" value="<?php echo $phone; ?>" name="phone_out">Telephone Number
        <textarea rows="8" cols="150"  name="about_out"><?php echo $about; ?></textarea>
        <input type="submit" value="update">
    </form><br>
</body>
    <h4>Project holder</h4>

<?php

echo createProjectForm($result1);

?>


