<?php
  ini_set('display_errors', 'On');
  session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Sessions</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    $_SESSION['first_name'] = "kevin";
    $name = $_SESSION['first_name'];
    echo $name;
  ?>
</html>
