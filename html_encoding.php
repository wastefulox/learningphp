<!DOCTYPE html>
<html lang="en-US">
<head>
<title>HTML Encoding</title>
</head>
<body>
  <h1 class=""></h1>
  <?php
    ini_set('display_errors', 'On');
    $linktext = "<Click> & learn more!";
  ?>
  <p>
    <a href="">
      <?php echo htmlspecialchars($linktext); ?>
    </a>
  </p>
  </html>
