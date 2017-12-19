<?php
require("inc/functions.php");
$conn = connectToDB();
$menu = "menu.php";


if (isset($_GET["categoryid"])) {
    $idcat = $_GET["categoryid"];
    $sql = "SELECT * FROM games WHERE gamecategory = ".$idcat;
		//die($sql);
}else{
    $sql = "SELECT * FROM games";
}

// 1 = blue, 2 = green, 3 = black
// if no $idcat, then red

if(!isset($idcat))
{
  $backgroundColor = "red";
}
else
{
  if($idcat == 1)
  {
    $backgroundColor = "blue";
  }
  if($idcat == 2)
  {
    $backgroundColor = "black";
  }

  if($idcat == 3)
  {
    $backgroundColor = "green";
  }
}



$result = $conn->query($sql);

$rows = $result->fetch_all(MYSQLI_ASSOC);
/*
echo"<pre>";
var_dump($rows);
echo"</pre>";
die("einde");
*/
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

<div class="productencat">
<?php

if (isset($_GET["categoryid"])) {
  if ($idcat == 1)
  {
  	echo "<p>Playstation 4 </p>";
  }
  else if ($idcat == 2)
   {
  	echo "<p> PC </p>";
  }
  else if ($idcat == 3)
   {
  	echo "<p> X-box </p>";
  }
}
	 ?>
</div>

<div class="product-item">
        <?php
        foreach ($rows as $key => $value)
        {
            echo '
            <div class="product-container"  style="background: url(\'images/'.$value["gameimage"].'\') no-repeat  center ; background-size:cover">
            <div class="product-price">'.$value["gameprice"].'</div>
						<div class="product-naam '. $backgroundColor . '">'.$value["gametitle"].'</div>

             <input type="button" name="order" value="order">
               </div>';
        }
        ?>
				<div class="clearfix"></div>
</div>
</body>

<footer>
<?php
include("inc/footer.php");
 ?>
</footer>

</body>
</html>
