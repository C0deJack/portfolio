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

var_dump($result1);

function projectInputVariables ($result1) {
    $i = 0;
    foreach ($result1 as $key => $val ){
        $var =

            $i++;
    }

}

$project_img1 = $result1 [0]['project_img'];
$project_title1 = $result1 [0]['project_title'];
$project_text1 = $result1 [0]['project_text'];
$project_link1 = $result1 [0]['project_link'];

$project_img2 = $result1 [1]['project_img'];
$project_title2 = $result1 [1]['project_title'];
$project_text2 = $result1 [1]['project_text'];
$project_link2 = $result1 [1]['project_link'];

$project_img3 = $result1 [2]['project_img'];
$project_title3 = $result1 [2]['project_title'];
$project_text3 = $result1 [2]['project_text'];
$project_link3 = $result1 [2]['project_link'];

$project_img4 = $result1 [3]['project_img'];
$project_title4 = $result1 [3]['project_title'];
$project_text4 = $result1 [3]['project_text'];
$project_link4 = $result1 [3]['project_link'];

$project_img5 = $result1 [4]['project_img'];
$project_title5 = $result1 [4]['project_title'];
$project_text5 = $result1 [4]['project_text'];
$project_link5 = $result1 [4]['project_link'];

$project_img6 = $result1 [5]['project_img'];
$project_title6 = $result1 [5]['project_title'];
$project_text6 = $result1 [5]['project_text'];
$project_link6 = $result1 [5]['project_link'];

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
        <article>
            <div class="img-holder"><img src="assets/pilot-shop.png" alt="pilot shop screen shot"></div>
            <div class="txt-holder">
                <h3><?php echo $project_title1; ?></h3>
                <p><?php echo $project_text1; ?></p>
            </div>
        </article>
        <article>
            <div class="img-holder"><img src="assets/mayden-logo.jpg" alt="mayden academy logo"></div>
            <div class="txt-holder">
                <h3><?php echo $project_title2; ?></h3>
                <p><?php echo $project_text2; ?></p>
            </div>
        </article>
        <article>
            <div class="img-holder"><video autoplay muted loop playsinline poster="assets/roller-coaster-large.gif" class="portfolio-video">
                <input type="button" value="Play" onclick="assets/roller-coaster.mp4.play()">
                <source src="assets/roller-coaster.mp4" type="video/mp4"></div>
            <div class="txt-holder">
                <h3><?php echo $project_title3; ?></h3>
                <p><?php echo $project_text3; ?></p>
            </div>
        </article>
        <article>
            <div class="img-holder"><img src="assets/place-holder.jpg" alt="computer screen showing code"></div>
            <div class="txt-holder">
                <h3><?php echo $project_title4; ?></h3>
                <p><?php echo $project_text4; ?></p>
            </div>
        </article>
        <article>
            <div class="img-holder"><video autoplay muted loop playsinline poster="assets/typing.gif" class="portfolio-video">
                <source src="assets/typing.mp4" type="video/mp4"></div>
            <div class="txt-holder">
                <h3><?php echo $project_title5; ?></h3>
                <p><?php echo $project_text5; ?></p>
            </div>
        </article>
        <article>
            <div class="img-holder"><img src="assets/ipad.jpg" alt="woman holding an ipad"></div>
            <div class="txt-holder">
                <h3><?php echo $project_title6; ?></h3>
                <p><?php echo $project_text6; ?></p>
            </div>
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
</footer>
</body>
</html>