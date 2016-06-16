<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Validations</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    ini_set('display_errors', 'On');
    // * Presence
    $value = trim("  0  ");
    if(!isset($value) || empty($value) && !is_numeric($value)){
      echo "validation failed<br />";
    };
    // * String Length
    // minimum length
    $value = "abcd";
    $min = 3;
    if (strlen($value) < $min){
      echo "validation failed. value input is too short.<br />";
    };
    // maximum length
    $max = 18;
    if (strlen($value) > $max){
      echo "validation failed. value input is too long.<br />";
    };
    // * Type
    $value = "1";
    if (!is_string($value)){
      echo "validation failed. value input is not a string.<br />";
    };
    // * Inclusion in a set
    $value = "1";
    $set = ["1", "2", "3", "4"];
    if (!in_array($value, $set)){
      echo "validation failed. value input is not in the set.<br />";
    };
    // * Uniqueness
    // saving it for later

    // * Format
    // use a regex on a string
    // preg_match($regex, $subject)
    if(preg_match("/PHP/", "PHP is fun")){
      echo "A match was found<br />";
    } else {
      echo "No match found.<br />";
    }
    $value = "mrmanican@mrmanican.ddns.net";
    if (!preg_match("/@/", $value)){
      echo "validation failed. not a proper email address.<br />";
    };

    // use string position
    if(strpos($value, "@") === false){
      echo "validation failed.";
    }
  ?>
</html>
