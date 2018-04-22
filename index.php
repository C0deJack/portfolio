<?php
require 'php/download.php';
require 'php/connect.php';

$db = connect();

$result = getAboutMe($db);

$email = $result['email'];
$phone = $result['phone'];
$about = $result['about'];

$result1 = getProjects($db);

/**
 * Function dynamically creates the project articles with the given database
 *
 * @param $result1 - Array from jackdb database
 * @return string - html code output
 */
function createProjectArticle(array $result1)
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
    <link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
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
        <h3><a  href="mailto:<?php echo $email; ?>?Subject=Website%20enquiry"
                target="_blank"><?php echo $email; ?></a></h3>
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
            <a  href="mailto:<?php echo $email; ?>?Subject=Website%20enquiry"
               target="_blank"><?php echo $email; ?></a>
        </div >
        <div class="contact-box">
            <div class="contact-head">Follow me:</div>
            <div><a target="_blank" href="https://github.com/C0deJack">GitHub</a></div>
            <div><a target="_blank" href="https://maydenacademy.co.uk/progressive-web-apps-the-best-thing-since-sliced-bread/">Blog</a></div>
        </div>
        <div>
            <a target="_blank" href="php/login.php">CMS Login</a>
        </div>
</footer>
</body>
</html>