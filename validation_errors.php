<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Validation Errors</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    require_once('validation_functions.php');
    ini_set('display_errors', 'On');
    $errors = [];
    //$username = trim($_POST["username"]);
    $username = trim("");

    if (!hasPresence($username)){
      $errors['username'] = "Username cannot be blank";
    }
  ?>
  <br />
  <?php echo outputErrors($errors); ?>
</body>
</html>
