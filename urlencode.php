<!DOCTYPE html>
<html lang="en-US">
<head>
<title>URL Encoding</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    ini_set('display_errors', 'On');
    $page = "Willaim Shakespeare";
    $quote = "To be or not to be";
    $link1 = "/bio/".rawurlencode($page)."?quote=".urlencode($quote);
    $link2 = "/bio/".urlencode($page)."?quote=".rawurlencode($quote);

    echo $link1;
    echo "<br />";
    echo $link2; // with the + in the pre-? area, the site isn't won't work
  ?>
</html>
