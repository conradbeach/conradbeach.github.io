<!DOCTYPE html>
<html>

  <?php include_once "includes/page-head-inc.php"; ?>

  <body>

    <?php try {
      $db = new PDO("mysql:host=localhost; dbname=test", "root", "");
    } catch (Exception $e){
      echo "Could not connect to database.";
      exit();
    } ?>

    <?php
      echo "<h2>Hey " . htmlspecialchars($_POST["firstName"]) . "</h2>";
    ?>

    <h3>Your testing schedule is as follows...</h3>
    <p>(fill with data from table)</p>

    <p><a href="student-new-test-entry.php">Would you like to request a new test date?</a></p>







  </body>


