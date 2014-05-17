<!DOCTYPE html>
<html lang="">
<?php include_once "includes/page-head-inc.php"; ?>

<body>

  <h2>Welcome to the DRC testing scheduler!</h2>

  <h2 class="welcome">Student Login</h2>

  <div class="row">
    <div class="small-6 small-centered">
      <p>Please login below:</p>
    </div>
  </div>

  <div class="row">
    <div class="small-6 small-centered">
      <form action="student-login-action.php" method="post">
        <input type="text" name="firstName" placeholder="First Name" />
        <input type="text" name="lastName" placeholder="Last Name" />
        <input type="text" name="aNum" placeholder="A#" />
        <input class="button expand" type="submit">
      </form>
    </div>
  </div>

  <div class="row">
    <div class="small-6 small-centered">
      <p><a href="staff-login.php">Staff Login</a></p>
    </div>
  </div>

</body>
</html>









