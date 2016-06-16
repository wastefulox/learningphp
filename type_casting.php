<html lang="en">
<head>
<title>Type Juggling and Type Casting</title>
</head>
<body>
  <h1 class="">Type Juggling</h1>
  <p></p>
  <?php $count = "2"; ?>
  Type: <?php echo gettype($count); ?><br />

  <?php $count += 3; ?>
  Type: <?php echo gettype($count); ?><br />

  <?php $cats = "I have ".$count." cats."; ?>
  <?php echo $cats; ?><br />
  Cats: <?php echo gettype($cats); ?><br />

  <h1 class="">Type Casting</h1>
  <?php settype($count, "integer"); ?>
  Count: <?php echo gettype($count); ?><br />

  <?php $count2 = (string) $count; ?>
  count: <?php echo gettype($count); ?><br />
  count2: <?php echo gettype($count2); ?><br />
</html>
