<html>
<head>
<title>the title</title>
</head>
<body>
<h1 class=""></h1>
<p></p>
<?php
  $var1 = 5;
  $var2 = 7;
?>
Absolute Value: <?php echo abs($var1 - $var2); ?><br />
Exponential: <?php echo pow($var1, $var2); ?><br />
Modulo: <?php echo fmod($var2, $var1); ?><br />
Square Root: <?php echo sqrt($var2); ?><br />
Random: <?php echo rand(); ?><br />
Random (Min Max): <?php echo rand(1,10); ?><br />

</html>
