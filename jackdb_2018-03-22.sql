# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.39)
# Database: jackdb
# Generation Time: 2018-03-22 3:01:37 pm +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms`;

CREATE TABLE `cms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL DEFAULT '',
  `phone` varchar(100) NOT NULL DEFAULT '',
  `about` text,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cms` WRITE;
/*!40000 ALTER TABLE `cms` DISABLE KEYS */;

INSERT INTO `cms` (`id`, `email`, `phone`, `about`, `deleted`)
VALUES
	(1,'jackwoodpearce@gmail.com','+44 7746 223593','Jack\'s designs bring customised and considered innovation to websites and software systems to enhance your business and everyday life. With over three weeks of experience he can draw upon knowledge of front end systems such as HTML, CSS, Git, Git Hub, Php Storm. With the great work of Mayden Academy, he is studying hard to become a well-rounded full stack developer and is already a certified Scrum Master. His next set of challenges over the coming months are Databases, SQL, RWD, CSS frameworks, PWA\'s, Object Orientated Programming, MVC & PHP Frameworks, JavaScript Frameworks & Node.js and PHP ZCE. Please get in contact to discuss your next project.',1),
	(2,'jackwoodpearce@gmail.com','+44 7746 223593','Jack\'s designs bring customised and considered innovation to websites and software systems to enhance your business and everyday life.  With the great work of Mayden Academy and a great work ethic he has become a well-rounded full stack developer. Some of his knowledge base includes the following: HTML5, CSS3, Git, Git Hub, Php Storm, Databases, SQL, RWD, CSS frameworks, PWA\'s, Object Orientated Programming, MVC & PHP Frameworks, JavaScript Frameworks & Node.js and PHP ZCE.  He has qualified as a Scrum Master and is studying hard to take his Zen exams in June. He has a good eye for front end development and UX but also engaged in developing efficient and secure backend systems.  Please get in contact to discuss your next project.',1),
	(3,'jackwoodpearce@gmail.com','+44 7746 223593','aaJack\'s designs bring customised and considered innovation to websites and software systems to enhance your business and everyday life.  With the great work of Mayden Academy and a great work ethic he has become a well-rounded full stack developer. Some of his knowledge base includes the following: HTML5, CSS3, Git, Git Hub, Php Storm, Databases, SQL, RWD, CSS frameworks, PWA\'s, Object Orientated Programming, MVC & PHP Frameworks, JavaScript Frameworks & Node.js and PHP ZCE.  He has qualified as a Scrum Master and is studying hard to take his Zen exams in June. He has a good eye for front end development and UX but also engaged in developing efficient and secure backend systems.  Please get in contact to discuss your next project.',1),
	(23,'jackwoodpearce@gmail.com','+44 7746 223593','Jack\'s designs bring customised and considered innovation to websites and software systems to enhance your business and everyday life.  With the great work of Mayden Academy and a great work ethic he has become a well-rounded full stack developer. Some of his knowledge base includes the following: HTML5, CSS3, Git, Git Hub, Php Storm, Databases, SQL, RWD, CSS frameworks, PWA\'s, Object Orientated Programming, MVC & PHP Frameworks, JavaScript Frameworks & Node.js and PHP ZCE.  He has qualified as a Scrum Master and is studying hard to take his Zen exams in June. He has a good eye for front end development and UX but also engaged in developing efficient and secure backend systems.  Please get in contact to discuss your next project.',1),
	(24,'jackwoodpearce@gmail.com','+44 7746 223593','aaaaaJack\'s designs bring customised and considered innovation to websites and software systems to enhance your business and everyday life.  With the great work of Mayden Academy and a great work ethic he has become a well-rounded full stack developer. Some of his knowledge base includes the following: HTML5, CSS3, Git, Git Hub, Php Storm, Databases, SQL, RWD, CSS frameworks, PWA\'s, Object Orientated Programming, MVC & PHP Frameworks, JavaScript Frameworks & Node.js and PHP ZCE.  He has qualified as a Scrum Master and is studying hard to take his Zen exams in June. He has a good eye for front end development and UX but also engaged in developing efficient and secure backend systems.  Please get in contact to discuss your next project.',1),
	(25,'jackwoodpearce@gmail.com','+44 7746 223593','Jack\'s designs bring customised and considered innovation to websites and software systems to enhance your business and everyday life.  With the great work of Mayden Academy and a great work ethic he has become a well-rounded full stack developer. Some of his knowledge base includes the following: HTML5, CSS3, Git, Git Hub, Php Storm, Databases, SQL, RWD, CSS frameworks, PWA\'s, Object Orientated Programming, MVC & PHP Frameworks, JavaScript Frameworks & Node.js and PHP ZCE.  He has qualified as a Scrum Master and is studying hard to take his Zen exams in June. He has a good eye for front end development and UX but also engaged in developing efficient and secure backend systems.  Please get in contact to discuss your next project.',0);

/*!40000 ALTER TABLE `cms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `project_img` varchar(200) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `project_text` varchar(2000) DEFAULT NULL,
  `project_link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `project_img`, `project_title`, `project_text`, `project_link`)
VALUES
	(1,'<img src=\"assets/pilot-shop.png\" alt=\"pilot shop screen shot\">','The Pilot Shop                  ','This was a two day build of a shop home page to enhance our skill to produce a responsive website.','link 1                        '),
	(2,'<img src=\"assets/mayden-logo.jpg\" alt=\"mayden academy logo\">','Mayden Logo HTML &amp; CSS Only','Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.','link 2    '),
	(3,'<video autoplay muted loop playsinline poster=\"assets/roller-coaster-large.gif\" class=\"portfolio-video\">\n            <input type=\"button\" value=\"Play\" onclick=\"assets/roller-coaster.mp4.play()\">\n     ','Example Project ','Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.','link 3        '),
	(4,'<img src=\"assets/place-holder.jpg\" alt=\"computer screen showing code\">','Example Project','Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.','link 4            '),
	(5,'<video autoplay muted loop playsinline poster=\"assets/typing.gif\" class=\"portfolio-video\">\n            <source src=\"assets/typing.mp4\" type=\"video/mp4\">','Example Project','Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.','link 5        '),
	(6,'<img src=\"assets/ipad.jpg\" alt=\"woman holding an ipad\">','Example Project        ','Lorem ipsum dolor sit amet, at eum falli probatus phaedrum, ex falli choro qui. Has fuisset dignissim ne, ne qui novum denique iudicabit. No duo dicit nusquam.','link 6        ');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(70) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user`, `password`)
VALUES
	(1,'John','$2y$12$.HeznKxmmM.1l0LVYXU3T.5x2RYpRFH0KkYK/wVwlm//9KIjoGB8K'),
	(2,'Bob','$2y$12$56YDn/A5ckELpkeoohVSiO.L0uExxny2wpkU78iBhXuIjKYsHQ8DG'),
	(3,'Jane','$2y$12$.HeznKxmmM.1l0LVYXU3T.5x2RYpRFH0KkYK/wVwlm//9KIjoGB8K');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
