<?php
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

<table>

<thead>
	<tr>
		<th>Image</th>
		<th>Game</th>
		<th>Description</th>
		<th>total</th>
	</tr>
</thead>

<tbody>
	<tr>
		<td><img src="images/codWW2.jpg" width="270px" height="300px" ></td>
		<td>Call Of Duty World War 2</td>
		<td>After almost a decade of war in the present day, the near future, and the not-so-near future, the Call of Duty franchise will finally return to World War II in the appropriately titled Call of Duty: WWII. Created by Advanced Warfare studio Sledgehammer Games, Call of Duty: WWII takes players into the vicious European conflict during the last year of the war, and replicates many of the deadly battles that eventually led to the downfall of Nazism and Germany’s surrender. Here is everything we know about the game so far.</td>
		<td> &euro;50,00</td>
	</tr>
	<tr>
		<td><img src="images/gta5.jpg" width="270px" height="300px" ></td>
		<td>Grand Theft Auto 5</td>
		<td>When a young street hustler, a retired bank robber and a terrifying psychopath find themselves entangled with some of the most frightening and deranged elements of the criminal underworld, the U.S. government and the entertainment industry, they must pull off a series of dangerous heists to survive in a ruthless city in which they can trust nobody, least of all each other.</td>
		<td> &euro;40,00</td>
	</tr>
	<tr>
		<td><img src="images/fifa18.jpg"  width="270px" height="300px"></td>
		<td>Fifa 18</td>
		<td>In the Age of the Internet, where we demand everything faster and our attention spans shrink to that of a goldfish, it's interesting that both PES and FIFA are slowing down. It's a trend aimed at making soccer games more realistic, but upto and including FIFA 17, it had caused EA's series to suffer, with every title since FIFA 15 feeling less responsive than its predecessor. Finally, with FIFA 18, the franchise has managed to arrest its decline, and while the series' latest entry still feels slow, it at least feels a little more responsive, and less frustrating as a result. Combined with outstanding presentation and more ways to play than ever, FIFA 18's on-pitch improvements represent the beginnings of a recovery for the series.</td>
		<td> &euro;65,00</td>
	</tr>
</tbody>

<tfooter>
	<tr>
		<td colspan="4">&euro;155,00 </td>
	<tr>
</tfooter>

</table>
</body>
<footer>
		  <?php
		  include("inc/footer.php");
		   ?>
</footer>
</html>
