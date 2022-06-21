<!DOCTYPE html>
<html>
<head>
    <title>Ayoub Mansouri</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Draco is free PSD &amp; HTML template by @afnizarnur">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/kube.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/custom.min.css" />
    <link rel="shortcut icon" href="img/favicon.png" />
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display+SC:700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	<style>
		.intro h1:before {
			/* Edit this with your name or anything else */
			content: 'AYOUB';
		}
	</style>
</head>
<body>
	<!-- Navigation -->
	<div class="main-nav">
		<div class="container">
			<header class="group top-nav">
				<div class="navigation-toggle" data-tools="navigation-toggle" data-target="#navbar-1">
				    
				</div>
			    <nav id="navbar-1" class="navbar item-nav">
				    <ul>
				        <li class="active"><a href="#about">Infos</a></li>
				        <li><a href="#experiences">Expériences professionnelles</a></li>
				        <li><a href="#achievements">Projets</a></li>
				        <li><a href="#skills">Compétences</a></li>
				    </ul>
				</nav>
			</header>
		</div>
	</div>

	<!-- Introduction -->
	<div class="intro section" id="about">
		<div class="container">
			<p>Salut , je suis Ayoub MANSOURI</p>
			<div class="units-row units-split wrap">
				<div class="unit-20">
					<img src="img/ava.jpg" alt="Avatar">
				</div>
				<div class="unit-80">
					<h1><br><span id="typed"></span></h1>
				</div>
				<p>
					Elève ingénieur en deuxième année à
					l’ENSIAS
								</p>
			</div>
		</div>
	</div>

	<!-- Work Experience -->
	<div class="work section second" id="experiences">
		<div class="container">
			<h1>Expériences<br>professionnelles</h1>
			<ul class="work-list">
				<li><a href="#">Stage d'été de première année :</a></li>
				<li>Sujet: Mise en œuvre d’une plateforme de gestion de publication des annonces.
				</li>
				<li>31/07/2021 – 01/09/2021</li>
			</ul>
		</div>
	</div>

	<!-- Award & Achievements -->
	<div class="award section second" id="achievements">
		<div class="container">
			<h1>Projets &amp;<br></h1>
			<ul class="award-list list-flat">
				<li></li>
				<li>Conception et développement d'une application
					WEB pour la gestion des evenements sportifs à 
					base de géolocalisation.</li>
				<li></li>
			</ul>
			<ul class="award-list list-flat">
				<li></li>
				<li>Conception et Développement d’une application 
					e-tourisme à base des Web services.</li>
				<li></li>
				<li></li>
			</ul>
			<ul class="award-list list-flat">
				<li></li>
				<li>Conception et développement d’une
					application de gestion des conférences .</li>
				<li></li>
			</ul>
		</div>
	</div>

	<!-- Technical Skills -->
	<div class="skills section second" id="skills">
		<div class="container">
			<h1>Compétences<br></h1>
			<ul class="skill-list list-flat">
				<li>Web Technology</li>
				<li>HTML / CSS / JAVA / PHP / Javascript</li>
			</ul>
			<ul class="skill-list list-flat">
				<li>Database</li>
				<li>MySQL / MongoDB / Oracle </li>
			</ul>
			<ul class="skill-list list-flat">
				<li>Framework</li>
				<li>Laravel / CodeIgniter  / Spring boot /Angular</li>
			</ul>
			<ul class="skill-list list-flat">
				<li><a href="https://github.com/ayoub-mansouri4" target="blank">Github:  <i class="fa fa-github" style="font-size: 30px;"></i></a></li>
			</ul>
			<ul class="skill-list list-flat">
				<li><a href="https://www.linkedin.com/in/ayoub-mansouri-mns/" target="blank">Linkedin:  <i class="fa fa-linkedin" style="font-size: 30px;"></i></a></li>
			</ul>
		</div>
	</div>


	<!-- Javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/typed.min.js"></script>
    <script src="js/kube.min.js"></script>
    <script src="js/site.js"></script>
    <script>
		function newTyped(){}$(function(){$("#typed").typed({
		// Change to edit type effect
		strings: ["bienvenue", "bienvenue", "bienvenue"],

		typeSpeed:90,backDelay:700,contentType:"html",loop:!0,resetCallback:function(){newTyped()}}),$(".reset").click(function(){$("#typed").typed("reset")})});
    </script>
</body>
</html>
