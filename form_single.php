<?php
  require_once("include_functions.php");
  if(isset($_POST["submit"])){
    // form was submitted
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username == "joecamel" && $password == "password"){
      // success
      redirectTo("index.php");
    } else {
      $username = $_POST["username"];
      $message = "You encountered some errors.";
    };
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
  ?>
  <br />
  <form action="form_single.php" method="post">
    Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" /><br />
    Password: <input type="password" name="password" value="" /><br />
    <br />
    <input type="submit" name="submit" value="Submit" />
  </form>
</html>
