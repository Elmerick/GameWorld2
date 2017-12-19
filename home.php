<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Positionering">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>GAMESTOP</title>
</head>
<body>
	<header id="header">
		<div id="logo">
			<a href="home.php">GAMESTOP</a>
		</div>
	</header>

<div id="main-container">
<header id="header1">
<nav	id="main-nav1">
<?php
	include("inc/index.php");
 ?>
</nav>
</header>

<div id="banner-image">

<div id="h1">
	<h1><marquee behavior="alternate" direction="up" width="120%">
	<marquee direction="right" behavior="alternate">Welcome To GAMESTOP</marquee>
</marquee><h1>
	</div>
	<div id="h2">
		<h2>the most complete webshop<h2>
		</div>
</div>
</div>

<div id="game-container">
	<div id="blue-box">
		<a href="games.php?categoryid=1">Playstation</a>
	</div>
	<div id="green-box">
		<a href="games.php?categoryid=3">X-Box</a>
	</div>
	<div id="black-box">
		<a href="games.php?categoryid=2">PC</a>
	</div>
	</div>
</body>

<footer>
		  <?php
		  include("inc/footer.php");
		   ?>
</footer>

</html>
