<?php
$db = new PDO('mysql:host=127.0.0.1; dbname=jackdb', 'root');

$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,
PDO::FETCH_ASSOC);

$query= $db->prepare("SELECT `email`, `phone`, 
`about` FROM `cms` WHERE `deleted`= '0';");

$query->execute();
$result= $query->fetchAll();

$email = $result [0]['email'];
$phone = $result [0]['phone'];
$about = $result [0]['about'];

$query1= $db->prepare("SELECT `id`, `project_img`, 
`project_title`, `project_text`, `project_link` FROM `projects`; ");

$query1->execute();
$result1= $query1->fetchAll();

/**
 * Function dynamically creates the project articles with the given database
 * @param $result1 - Array from jackdb database
 * @return string - html code output
 */
function createProjectArticle($result1)
{
$result_output = "";
foreach ($result1 as $list) {
    $result_output .=
        "<article>
            <div class='img-holder'> " . $list['project_img'] . " 
            </div>
            <div class='txt-holder'>
            <h3>" . $list['project_title'] . "</h3>
            <p>" . $list['project_text'] . "</p>
            </div>
            </article>";
}
    return $result_output;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jack Wood-Pearce</title>
</head>
<body>
<header id="home">
    <h1><a href="#home">JACK WOOD-PEARCE</a></h1>
    <nav>
        <a href="#portfolio"><div class="nav-portfolio">PORTFOLIO</div></a>
        <a href="#about"><div class="nav-about">ABOUT</div></a>
        <a href="#contact"><div class="nav-contact">CONTACT</div></a>
    </nav>
    <div class="phone">
        <h3><?php echo $phone; ?></h3>
        <h3><?php echo $email; ?></h3>
    </div>
    <a href="#home" class="side-tab"><img src="assets/up-arrow.png" alt="up arrow"></a>
</header>
<section>
    <div id="about">
        <?php echo $about; ?>
    </div>
    <div class="icons">
        <div><img src="assets/icons8-html.png" alt="html icon"></div>
        <div><img src="assets/icons8-css3.png" alt="css 3 icon"></div>
        <div><img src="assets/PWA.png" alt="pwa icon"></div>
        <div><img src="assets/github.png" alt="github icon"></div>
        <div><img src="assets/icons8-nodejs.png" alt="node icon"></div>
        <div><img src="assets/scrum.png" alt="scrum icon"></div>
        <div><img src="assets/mayden-logo-small.png" alt="mayden academy icon"></div>
    </div>
</section>
<main id="portfolio">
    <div class="portfolio-box">
        <?php  echo createProjectArticle($result1); ?>
    </div>
</main>
<footer id="contact">
        <div class="contact-box">
            <div class="contact-head">Contact me:</div>
            <div><?php echo $phone; ?></div>
            <div><?php echo $email; ?></div>
        </div >
        <div class="contact-box">
            <div class="contact-head">Follow me:</div>
            <div><a target="_blank" href="https://github.com/C0deJack">GitHub</a></div>
            <div>Blog</div>
        </div>
        <div>
            <a target="_blank" href="login.php">CMS Login</a>
        </div>
</footer>
</body>
</html>