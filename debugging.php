<!DOCTYPE html>
<html lang="en-US">
<head>
<title>the title</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    ini_set('display_errors', 'On');
    $numbers = [4,8,16,32,64,128,256];
    $name = "Mat";
    $cool = true;
    $floater = 3.14159;

    var_dump($floater);
    var_dump($name);
    var_dump($numbers);
  ?>
  <br />
  <pre>
  <?php
    get_defined_vars();
    echo print_r(get_defined_vars());
  ?>
  <br />
  <?php
    var_dump(debug_backtrace());
  ?>
</pre>
</html>
