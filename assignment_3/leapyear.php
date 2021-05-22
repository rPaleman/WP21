<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Leap Year',
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
      <form id="leapyearform" action="leapyear.php" method="POST" novalidate>
		  <label for="name">Name</label><br>
		  <div><input type="text" name="name" id="name" required><br></div>
          <div class="valid-feedback">
                Looks good!
          </div>
          <div class="invalid-feedback">
              Please choose a username.
          </div>
          <label for="age">Age</label><br>
          <div><input type="text" name="age" id="age" required><br></div>
          <div class="valid-feedback">
              Looks good!
          </div>
          <div class="invalid-feedback">
              Please choose a username.
          </div>
          <label for="mail">Mail</label><br>
          <div><input type="text" name="mail" id="mail" required><br></div>
          <div class="valid-feedback">
              Looks good!
          </div>
          <div class="invalid-feedback">
              Please choose a username.
          </div>
		  <label for="place">Place</label><br>
		  <div><input type="text" name="place" id="place" required><br></div>
		  <div class="valid-feedback">
              Looks good!
          </div>
          <div class="invalid-feedback">
              Please choose a username.
          </div>
          <div><input type="submit" value="Submit"></div>
          <?php
          if ($_GET["name"] != ""){
              echo $_GET["valid-feedback"];
          }
          else {
              echo $_GET["invalid-feedback"];
          }

          if ($_GET["place"]){
              if ($_GET["place"] == "Amsterdam"){
                  echo "<p>You're from the capital of the Netherlands!</p><br>";
              }
              else {
                  echo "<p>You're from ";
                  echo $_GET["place"];
                  echo "!</p><br>";
              }
          }
          ?>
	  </form>
    </div>
  </div>
</div>
<?php
include __DIR__ . '/tpl/body_end.php';
?>