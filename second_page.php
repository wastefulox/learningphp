<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Second Page</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <pre>
    <?php
      ini_set('display_errors', 'On');
      // print_r($_GET);
    ?>
  </pre>
  <br />
  <?php
    $id = $_GET['id'];
    echo $id;
  ?>
  <br />
  <?php
    $company = $_GET['company'];
    echo $company;
  ?>
</html>
