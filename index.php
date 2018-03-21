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
//var_dump($result);
//var_dump($result [0]['phone']);

$query1= $db->prepare("SELECT `id`, `project_img`, 
`project_title`, `project_text`, `project_link` FROM `projects`; ");

$query1->execute();
$result1= $query1->fetchAll();

//var_dump($result1);

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
                <h3>The Pilot Shop</h3>
                <p>This was a two day build of a shop home page to enhance our skill to produce a responsive website.</p>
            </div>
        </article>
        <article>
            <div class="img-holder"><img src="assets/mayden-logo.jpg" alt="mayden academy logo"></div>
            <div class="txt-holder">
                <h3>Mayden Logo HTML &amp; CSS Only</h3>
                <p>Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.</p>
            </div>
        </article>
        <article>
            <div class="img-holder"><video autoplay muted loop playsinline poster="assets/roller-coaster-large.gif" class="portfolio-video">
                <input type="button" value="Play" onclick="assets/roller-coaster.mp4.play()">
                <source src="assets/roller-coaster.mp4" type="video/mp4"></div>
            <div class="txt-holder">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.</p>
            </div>
        </article>
        <article>
            <div class="img-holder"><img src="assets/place-holder.jpg" alt="computer screen showing code"></div>
            <div class="txt-holder">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.</p>
            </div>
        </article>
        <article>
            <div class="img-holder"><video autoplay muted loop playsinline poster="assets/typing.gif" class="portfolio-video">
                <source src="assets/typing.mp4" type="video/mp4"></div>
            <div class="txt-holder">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.</p>
            </div>
        </article>
        <article>
            <div class="img-holder"><img src="assets/ipad.jpg" alt="woman holding an ipad"></div>
            <div class="txt-holder">
                <h3>Example Project</h3>
                <p>Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.</p>
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