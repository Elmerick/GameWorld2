<?php
//if "email" variable is filled out, send email
	if (isset($_REQUEST['email']))  {
//Email information
$admin_email = "gewoon_juje@hotmail.com";
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['name'];
	$comment = $_REQUEST['comment'];
//send email
	mail($admin_email, $subject, $comment, "From:" . $email);
//Email response
	echo "Thank you for contacting us!";}
//if "email" variable is not filled out, display the form
	else  {
		?>

	<?php
				}
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

  <div  id="contact-container">
    <form method="post">
        <p>Name:</p>
          <br />
        <input name="name" type="text" />
        <p>Email:</p>
          <br />
        <input name="email" type="text" />
          <br />
        <p>Message:</p>
          <br />
        <textarea name="comment" rows="15" cols="40"></textarea>
          <br />
        <input type="submit" class=button value="Submit" />
        </form>
  </div>
</body>

<footer>
		  <?php
		  include("inc/footer.php");
		   ?>
</footer>
</html>
