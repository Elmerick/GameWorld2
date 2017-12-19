<?php
    $menu = "menu.php";


$pages = array(
    array ("Home","Home.php"),
    array ("Games","games.php"),
    array ("About us", "About.php"),
    array ("Contact","Contact.php"),
    array ("Checkout","Checkout.php")

);

?>
<ul>
    <?php
      foreach ($pages as $page)
      {
            ?>
            <li><a href="<?php echo $page[1]; ?>"><?php echo $page[0];?></a></li>
            <?php
      }
     ?>
</ul>
