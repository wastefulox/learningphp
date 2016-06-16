<html>
<head>
<title>Array Functions</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php $numbers = [2,4,8,16,32,64]; ?>
  Count:          <?php echo count($numbers); ?><br />
  Max Value:      <?php echo max($numbers); ?><br />
  Min Value:      <?php echo min($numbers); ?><br />
  <br />
  <pre>
    Sort:           <?php sort($numbers); print_r($numbers); ?><br />
    Reverse Sort:   <?php rsort($numbers); print_r($numbers); ?><br />
  </pre>
  <br />
  Implode:  <?php echo $num_string = implode(" * ", $numbers); ?><br />
  <pre>Explode:  <?php print_r(explode(" * ", $num_string)); ?><br /></pre>
  <br />
  Is 30 in array? <?php echo in_array(30, $numbers); // returns T/F ?><br />
  Is 32 in array? <?php echo in_array(32, $numbers); // returns T/F ?><br />

</html>
