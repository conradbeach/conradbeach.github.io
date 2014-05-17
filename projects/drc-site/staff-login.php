<!DOCTYPE html>
<html lang="">

<?php include_once "includes/page-head-inc.php"; ?>

<body>

  <h1 class="welcome">Staff Login</h1>

  <div class="row">
    <div class="small-6 small-centered">
      <p>Please login below:</p>
    </div>
  </div>

  <div class="row">
    <div class="small-6 small-centered">
      <form action="staff-login-action.php" method="post">
        <input type="text" name="firstName" placeholder="First Name" />
        <input type="text" name="lastName" placeholder="Last Name" />
        <input type="text" name="aNum" placeholder="A#" />
        <input class="button expand" type="submit">
      </form>
    </div>
  </div>

  <div class="row">
    <div class="small-6 small-centered">
      <p>Back to <a href="index.php">student login</a>.</p>
    </div>
  </div>

</body>
</html>









