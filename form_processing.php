<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Forms: Form Processing</title>
</head>
<body>

  <pre>
  <?php
    ini_set('display_errors', 'On');
    print_r($_POST);
  ?>
  <br />
  <?php
    // detect form submisssion
    if(isset($_POST["submit"])){
      echo "Form was submitted successfully.<br />";
    }
  ?>
  <br />
  <?php
    // set default values using ternary operator
    // boolean_test ? value_if_true : value_if_false
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
  ?>
  <?php
    // sets default values
    if (isset($_POST["username"])){
      $username = $_POST["username"];
    } else {
      $username = "";
    };
    if (isset($_POST["username"])){
      $password = $_POST["password"];
    } else {
      $password = "";
    };
  ?>
  <?php
    echo "{$username}: {$password}";
  ?>
  </pre>
</html>
