<?php
  // REMEMBER: Setting cookies must be done before any HTML output
  ini_set('display_errors', 'On');
  $name = "test";
  $value = 'hello';
  $expire = time() + (60*60*24*7); // add seconds
  //setcookie($name, $value, $expire);
  //setcookie($name);
  //setcookie($name, null, $expire);
  setcookie($name, null, time()-3600);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Cookies</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
    <?php
      $test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "";
      echo $test;
    ?>
</html>
