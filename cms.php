<?php
$db = new PDO('mysql:host=127.0.0.1; dbname=jackdb', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
    PDO::FETCH_ASSOC);

$query= $db->prepare("SELECT `email`, `phone`, `about`,`deleted`
FROM `cms` WHERE `deleted` = 0 ORDER BY `id` DESC LIMIT 1;");

$query1= $db->prepare("SELECT `project_img`, `project_title`,
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_id` = '1' AND `project_delete` = 0;");

$query2= $db->prepare("SELECT `project_img`, `project_title`,
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_id` = '2' AND `project_delete` = 0;");

$query3= $db->prepare("SELECT `project_img`, `project_title`,
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_id` = '3' AND `project_delete` = 0;");

$query4= $db->prepare("SELECT `project_img`, `project_title`,
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_id` = '4' AND `project_delete` = 0;");

$query5= $db->prepare("SELECT `project_img`, `project_title`,
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_id` = '5' AND `project_delete` = 0;");

$query6= $db->prepare("SELECT `project_img`, `project_title`,
`project_text`, `project_link`,`project_delete` FROM `projects` WHERE 
`project_id` = '6' AND `project_delete` = 0;");

$query->execute();
$query1->execute();
$query2->execute();
$query3->execute();
$query4->execute();
$query5->execute();
$query6->execute();

$result = $query->fetchAll();
$result1 = $query1->fetchAll();
$result2 = $query2->fetchAll();
$result3 = $query3->fetchAll();
$result4 = $query4->fetchAll();
$result5 = $query5->fetchAll();
$result6 = $query6->fetchAll();

$email = $result [0]['email'];
$phone = $result [0]['phone'];
$about = $result [0]['about'];
$del = $result [0]['deleted'];

$project_img1 = $result1 [0]['project_img'];
$project_title1 = $result1 [0]['project_title'];
$project_text1 = $result1 [0]['project_text'];
$project_link1 = $result1 [0]['project_link'];
$project_delete1 = $result1 [0]['project_delete'];

$project_img2 = $result2 [0]['project_img'];
$project_title2 = $result2 [0]['project_title'];
$project_text2 = $result2 [0]['project_text'];
$project_link2 = $result2 [0]['project_link'];
$project_delete2 = $result2 [0]['project_delete'];

$project_img3 = $result3 [0]['project_img'];
$project_title3 = $result3 [0]['project_title'];
$project_text3 = $result3 [0]['project_text'];
$project_link3 = $result3 [0]['project_link'];
$project_delete3 = $result3 [0]['project_delete'];

$project_img4 = $result4 [0]['project_img'];
$project_title4 = $result4 [0]['project_title'];
$project_text4 = $result4 [0]['project_text'];
$project_link4 = $result4 [0]['project_link'];
$project_delete4 = $result4 [0]['project_delete'];

$project_img5 = $result5 [0]['project_img'];
$project_title5 = $result5 [0]['project_title'];
$project_text5 = $result5 [0]['project_text'];
$project_link5 = $result5 [0]['project_link'];
$project_delete5 = $result5 [0]['project_delete'];

$project_img6 = $result6 [0]['project_img'];
$project_title6 = $result6 [0]['project_title'];
$project_text6 = $result6 [0]['project_text'];
$project_link6 = $result6 [0]['project_link'];
$project_delete6 = $result6 [0]['project_delete'];

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
    <input type="text" size="35" value="<?php echo $project_img1; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title1; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text1; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link1; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 2</h4><br>
    <input type="text" size="35" value="<?php echo $project_img2; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title2; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text2; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link2; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 3</h4><br>
    <input type="text" size="35" value="<?php echo $project_img3; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title3; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text3; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link3; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 4</h4><br>
    <input type="text" size="35" value="<?php echo $project_img4; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title4; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text4; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link4; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 5</h4><br>
    <input type="text" size="35" value="<?php echo $project_img5; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title5; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text5; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link5; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

<form method="post" action="cms.php">
    <h4>Project holder 6</h4><br>
    <input type="text" size="35" value="<?php echo $project_img6; ?>" name="project-img">Image file name<br>
    <input type="text" size="35" value="<?php echo $project_title6; ?>" name="project-title">Project Title (max 100 characters)<br>
    <input type="text" size="35" value="<?php echo $project_text6; ?>" name="project-text">Project Description (max 2000 characters)<br>
    <input type="text" size="35" value="<?php echo $project_link6; ?>" name="project-link">Project link URL<br>
    <input type="submit" value="update">
</form>

