<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Functions: Arguments</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    function sayHelloTo($word){
      echo "Hello {$word}!<br />";
    };

    $name = "Brandi Jo";
    sayHelloTo($name);
  ?>

  <?php
    function betterHello($greeting, $target, $punctuation){
      echo $greeting." ".$target.$punctuation."<br />";
    };

    betterHello("Hey", $name, "...");
  ?>
</html>
