<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Functions: Multiple Returns</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    function addSubt($val1, $val2){
      $add = $val1 + $val2;
      $subt = $val1 - $val2;
      // functions can only return one value so... arrays!
      return array($add, $subt);
    };

    $result = addSubt(10,5);
    echo "Add Result: ".$result[0]."<br />Subt Result: ".$result[1]."<br />";

    list($add_result, $subt_result) = addSubt(16,32);
    echo "Add Result: {$add_result} <br />Subt Result: {$subt_result}<br />";
  ?>
</html>
