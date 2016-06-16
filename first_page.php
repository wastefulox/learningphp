<!DOCTYPE html>
<html lang="en-US">
<head>
<title>First Page</title>
</head>
<body>
  <h1 class=""></h1>
  <?php $link_name = "Second Page"; ?>
  <?php $id = 2; ?>
  <?php $company = "ICT-NH Operations & LCAS"; ?>
  <a href="second_page.php?id=<?php echo $id; ?>&company=<?php echo urlencode($company); ?>"><?php echo $link_name ?></a>
  <p></p>
  <?php
    ini_set('display_errors', 'On');
  ?>
</html>
