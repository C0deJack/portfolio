<?php
$db = new PDO('mysql:host=127.0.0.1; dbname=jackdb', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC);

$query= $db->prepare("SELECT `email`, `phone`, `about`,`deleted`
FROM `cms` WHERE `deleted` = 0 ORDER BY `id` DESC LIMIT 1;");

$query1= $db->prepare("SELECT `project_id`, `project_img`, 
`project_title`,`project_text`, `project_link` FROM `projects` WHERE 
`project_delete` = 0 ORDER BY `project_id` ASC;");

$query->execute();
$query1->execute();

$result = $query->fetchAll();
$result1 = $query1->fetchAll();

$email = $result [0]['email'];
$phone = $result [0]['phone'];
$about = $result [0]['about'];
$del = $result [0]['deleted'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="cms.css">
    <title>Portfolio Input Page</title>
</head>
<h3>Welcome to the Portfolio Input Page</h3>

<form method="post" action="cms.php">
    <input type="text" value="<?php echo $email; ?>" name="email">email
    <input type="submit" value="update">
</form><br>
<form method="post" action="cms.php">
    <input type="tel" value="<?php echo $phone; ?>" name="tel">Telephone Number
    <input type="submit" value="update">
</form><br>
<form method="post" action="cms.php">
    <textarea rows="8" cols="150"  name="about" form="about">
        <?php echo $about; ?></textarea>
    <input type="submit" value="update">
</form><br>

    <h4>Project holder</h4>
<?php

foreach ($result1 as $list) {
    echo "<form method='post' action='cms.php'>";
    echo "<option value='" . $list['project_id'] . "'>" . $list['project_id'] . "</option>";
    echo "<input type='text' class='project_form' size='35' value='".$list ['project_img']."
    ' name='project-img'>Image file name";
    echo "<input type='text' class='project_form' size='35' value='".$list ['project_title']."
    ' name='project-title'>Project Title (max 100 characters)";
    echo "<input type='text' class='project_form' size='35' value='".$list ['project_text']."
    ' name='project-text'>Project Description (max 2000 characters)";
    echo "<input type='text' class='project_form' size='35' value='".$list ['project_link']."
    ' name='project-link'>Project link URL";
    echo "<input type='submit' value='update'>";
    echo "</form>";
}

?>


