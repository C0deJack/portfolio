<?php
$db = new PDO('mysql:host=127.0.0.1; dbname=jackdb', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC);

$query= $db->prepare("SELECT `email`, `phone`, `about`,`deleted`
FROM `cms` WHERE `deleted` = 0 ORDER BY `id` DESC LIMIT 1;");

$query2= $db->prepare("SELECT `project_img`, `project_title`, 
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_delete` = 0 ORDER BY `id` DESC LIMIT 1;");

$query->execute();
$query2->execute();
$result = $query->fetchAll();
$result2 = $query2->fetchAll();

$email = $result [0]['email'];
$phone = $result [0]['phone'];
$about = $result [0]['about'];
$del= $result [0]['deleted'];

$project_img = $result2 [0]['project_img'];
$project_title = $result2 [0]['project_title'];
$project_text = $result2 [0]['project_text'];
$project_link = $result2 [0]['project_link'];
$project_delete= $result2 [0]['project_delete'];

?>

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
    <textarea rows="8" cols="150"  name="about" form="about"><?php echo $about; ?></textarea>
    <input type="submit" value="update">
</form><br>

<form method="post" action="cms.php">
    <h4>Project holder 1</h4><br>
    <input type="text" size="35" value="<?php echo $project_img; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 2</h4><br>
    <input type="text" name="project-img">Image file name<br>
    <input type="text" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 3</h4><br>
    <input type="text" name="project-img">Image file name<br>
    <input type="text" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 4</h4><br>
    <input type="text" name="project-img">Image file name<br>
    <input type="text" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 5</h4><br>
    <input type="text" name="project-img">Image file name<br>
    <input type="text" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 6</h4><br>
    <input type="text" name="project-img">Image file name<br>
    <input type="text" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

