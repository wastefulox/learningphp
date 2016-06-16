<html>
<head>
<title>Arrays</title>
</head>
<body>
<h1 class=""></h1>
<p></p>
<?php
  $numbers = array(4,5,8,16,32,64);
  echo $numbers[2];
?>
<br />
<?php

  $mixed = array(4,"apple", "orange", array(2,4,8,"tomboy"));
  echo $mixed[2]."<br />";
  // echo $mixed[3]."<br />";

?>
<br />
<?php echo $mixed[3][3]."<br />"; ?>
<?php $mixed[2]="arugula";?>
<?php $mixed[4]="green beans";?>
<!-- don't know how long the array is so go to the end, go ahead and leave -->
<!-- the square brackets empty -->
<?php $mixed[]="horse"; ?>
<pre>
  <?php echo print_r($mixed); ?>
</pre>

<!-- Short notation availabe in php 5.4 and later -->
<?php $newArray=[1,2,3,4];?>
<?php echo $newArray[3]; ?>
</html>
