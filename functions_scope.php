<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Functions: Scope</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    $bar = "outside"; // global scope

    function foo(){
      global $bar; // must call global $bar...
      $bar = "inside"; // local scope
    };

    echo "1: ".$bar."<br />";
    foo();
    echo "2: ".$bar."<br />";

    var_dump($bar);
    get_defined_vars();
  ?>
</html>
