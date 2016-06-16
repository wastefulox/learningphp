<html lang="en">
<head>
<title>Functions: Defining</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    function sayHello(){
      echo "Hello World!<br />";
    };

    sayHello();

    function sayHelloTo($word){
      echo "Hello {$word}!<br />";
    };

    sayHelloTo("Jimmy");
  ?>
</html>
