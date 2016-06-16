<!DOCTYPE html>
<html lang="en-US">
<head>
<title>False Positives</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    ini_set('display_errors', 'On');
    function isEqual($value1, $value2){
      $output = "{$value1} == {$value2}: ";
      if($value1 == $value2){
        $output .= "true<br />";
      } else {
        $output .= "false<br />";
      }
      return $output;
    }

    // sting v null: converts null to ""
    // boolean v anything else: converts other to boolean
    // number v other (besides boolean): converts other to number
    echo isEqual(0, false);
    echo isEqual(4, true);
    echo isEqual(0, null);
    echo isEqual(0, "0");
    echo isEqual(0, "a");
    echo isEqual("1", "01");
    echo isEqual("", null);
    echo isEqual(3, "3 dogs");
    echo isEqual(100, "1e2");
    echo isEqual(100, 100.00);
    echo isEqual("abc", true);
    echo isEqual("123", "   123");
    echo isEqual("123", "+0123");
  ?>
  <br />
  <?php
    ini_set('display_errors', 'On');
    function isExact($value1, $value2){
      $output = "{$value1} === {$value2}: ";
      if($value1 === $value2){
        $output .= "true<br />";
      } else {
        $output .= "false<br />";
      }
      return $output;
    }

    // sting v null: converts null to ""
    // boolean v anything else: converts other to boolean
    // number v other (besides boolean): converts other to number
    echo isExact(0, false);
    echo isExact(4, true);
    echo isExact(0, null);
    echo isExact(0, "0");
    echo isExact(0, "a");
    echo isExact("1", "01");
    echo isExact("", null);
    echo isExact(3, "3 dogs");
    echo isExact(100, "1e2");
    echo isExact(100, 100.00);
    echo isExact("abc", true);
    echo isExact("123", "   123");
    echo isExact("123", "+0123");
  ?>
</html>
