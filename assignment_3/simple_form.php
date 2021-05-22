<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/WP21/assignment_3/index.php',
        'Add news item' => '/WP21/assignment_3/news_add.php',
        'Leap Year' => '/WP21/assignment_3/leapyear.php',
        'Simple Form' => '/WP21/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';
// Misschien hier includen? en dan op een manier handelen met action?
?>
<div class="container">
  <div class="row">
    <div class="col">
      <?php 
      if ($_GET["name"]){
      	echo "<h1>Welcome ";
      	echo $_GET["name"];
      	echo "!</h1>";
      }

      if ($_GET["place"]){
      	if ($_GET["place"] == "Amsterdam" or "amsterdam"){
      		echo "<p>You're from the captial of the Netherlands!</p><br>";
      	} 
      	else {
      		echo "<p>You're from ";
      		echo $_GET["place"];
      		echo "!</p><br>";
      	}
      } 
      ?>
      <form action="/simple_form.php" method="get">
		  <label for="name">Name</label><br>
		  <input type="text" name="name"><br>
		  <label for="place">Place</label><br>
		  <input type="text" name="place"><br>
		  <input type="submit" value="Submit">
	  </form>
    </div>
  </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>