<?php
  require_once("include_functions.php");
  require_once("validation_functions.php");

  $errors = [];
  $message = "";
  if(isset($_POST["submit"])){
    // form was submitted
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    // Validations
    $fields_required = ["username", "password"];
    foreach($fields_required as $key){
      $value = trim($_POST[$key]);
      if (!hasPresence($value)){
        $errors[$key] = ucfirst($key)." cannot be blank";
      }
    }
    // Using an accoc. array
    $fields_with_max_lengths = ["username" => 30, "password" => 9];
    validateMaxLengths($fields_with_max_lengths);

    if(empty($errors)){
      // Try to login part...
      if($username == "joecamel" && $password == "password"){
        // success
        redirectTo("index.php");
      } else {
        $username = $_POST["username"];
        $message = "Username and/or Password are invalid.";
      }
    }
  } else {
    $username = "";
    $message = "Please log in.";
  };

?>
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
    echo htmlspecialchars($message);
    echo outputErrors($errors);
  ?>
  <br />
  <form action="form_with_validation.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
    Password: <input type="password" name="password" value="" /><br />
    <br />
    <input type="submit" name="submit" value="Submit" />
  </form>
</html>
