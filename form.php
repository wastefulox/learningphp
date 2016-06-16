<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Forms</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    ini_set('display_errors', 'On');
  ?>
  <form action="form_processing.php" method="post">
    Username: <input type="text" name="username" value="" /><br />
    Password: <input type="password" name="password" value="" /><br />
    <br />
    <input type="submit" name="submit" value="Submit" />
  </form>
</html>
