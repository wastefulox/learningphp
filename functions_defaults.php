<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Functions: Default Argument Values</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    function paint($room="STOP! YOU DID NOT SPECIFY A ROOM", $color="STOP! YOU DID NOT SPECIFY A COLOR"){
      return "The color of the {$room} is {$color}.<br />";
    };
    echo paint("underwear", "shit brown");
    echo paint("office");
  ?>
</html>
