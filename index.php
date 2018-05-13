<?php
require 'php/download.php';
require 'php/connect.php';

$db = connect();
$result = getAboutMe($db);
$result1 = getProjects($db);

$email = $result['email'];
$phone = $result['phone'];
$about = $result['about'];

/**
 * Displays the link in the popup if there is a link in the db
 *
 * @param $listLinkItem
 * @return string
 */
function displayIfProjectLinkIsThere ($listLinkItem) {
     if ($listLinkItem) {
         return "<div class='linkBox'>
                    <a target=\"_blank\" href=" . $listLinkItem . ">PROJECT LINK</a>
                    </div>";
     } else return "";
 }

/**
 * Displays the link in the popup if there is a link in the db
 *
 * @param $listLinkItem
 * @return string
 */
function displayIfGithubLinkIsThere ($listLinkItem) {
     if ($listLinkItem) {
         return "<div class='linkBox'>
                    <a target=\"_blank\" href=" . $listLinkItem . ">GITHUB LINK</a>
                    </div>";
     } else return "";
 }


/**
 * Function dynamically creates the project articles with the given database
 *
 * @param $result1 - Array from jackdb database
 * @return string - html code output
 */
function createProjectArticle(array $result1)
{
$result_output = "";
foreach ($result1 as $key => $list) {
    $result_output .=
        "<article class='projectHolder'>
           <div class='img-holder'>  
                <img src= " . $list['project_img'] . " alt='" . $list['project_altImgText'] . "'>
                <div id='linkPopup' class='linkPopup slideHidden'>"
                . displayIfProjectLinkIsThere($list['project_link'])
                . displayIfGithubLinkIsThere($list['github_link']) .
                " </div>
            </div>
            <div class='txt-holder'>
                <h3><a target=\"_blank\" href=" . $list['title_link'] . ">" . $list['project_title'] . "</a></h3>
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
    <meta name="format-detection" content="telephone=no">
    <script src="js/animations.js" defer></script>
    <title>Jack Wood-Pearce</title>
</head>
<body>
<header id="home">
    <div class="top">
    <h1><a href="#home">JACK WOOD-PEARCE</a></h1>
    </div>
    <nav>
        <h2>FULL-STACK WEB DEVELOPER</h2>
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
<section id="about">
    <div>
        <?php echo $about; ?>
    <div class="icons">
        <div><img  src="assets/icons8-html.png" alt="html 5 icon"></div>
        <div><img src="assets/icons8-css3.png" alt="css 3 icon"></div>
        <div><img src="assets/PWA.png" alt="pwa icon"></div>
        <div><img src="assets/github.png" alt="github icon"></div>
        <div><img src="assets/icons8-nodejs.png" alt="node icon"></div>
        <div><img src="assets/scrum.png" alt="scrum icon"></div>
        <div><img src="assets/mayden-logo-small.png" alt="mayden academy"></div>
        <div><img src="assets/mysql.png" alt="My SQL icon"></div>
        <div><img src="assets/phpstorm.png" alt="Php Storm icon"></div>
        <div><img src="assets/sass.png" alt="Sass icon"></div>
        <div><img src="assets/PHP.png" alt="PHP icon"></div>
        <div><img src="assets/react.png" alt="PHP icon"></div>
        <div><img src="assets/angularjs.png" alt="PHP icon"></div>
        <div><img src="assets/js.png" alt="PHP icon"></div>
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
            <div><a target="_blank" href="https://maydenacademy.co.uk/
            progressive-web-apps-the-best-thing-since-sliced-bread/">Blog</a></div>
        </div>
        <div>
            <a class="cmsLogin" target="_blank" href="php/login.php">CMS LOGIN</a>
        </div>
</footer>
</body>
</html>