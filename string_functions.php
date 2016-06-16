<html>
<head>
<title>the title</title>
</head>
<body>
<h1 class=""></h1>
<p></p>
<?php
  $first = "mat";
  $second = "sturdevant";

  $third = $first;
  $third .= " ".$second;
?>

Lowercase: <?php echo strtolower($third); ?><br />
Uppercase: <?php echo strtoupper($third); ?><br />
Uppercase First: <?php echo ucfirst($third); ?><br />
Uppercase Words: <?php echo ucwords($third); ?><br />
<br />
Length: <?php echo strlen($third); ?><br />
Trim: <?php echo "A".trim(" B C D ")."E"; ?><br />
Find: <?php echo strstr($third, "turd"); ?><br />
Replace by String: <?php echo str_replace("turd", "turt", $third); ?><br />
<br />
Repeat: <?php echo str_repeat($third, 2); ?><br />
Make Substring: <?php echo substr($third, 5, 10) ?><br />
Find Position: <?php echo strpos($third, "turd"); ?><br />
Find Character <?php echo strchr($third, "n"); ?><br />
</html>
