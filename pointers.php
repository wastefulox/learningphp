<html lang="en">
<head>
<title>Pointers</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    $ages= [4,8,16,32,64,128];

    // use the current function to identify where the pointer is
    echo "1: ".current($ages)."<br />";
    // use the next function to move to the next pointer in the array
    next($ages);
    echo "2: ".current($ages)."<br />";
    next($ages);
    next($ages);
    echo "3: ".current($ages)."<br />";
    // use the prev function to move to the previous pointer in the array
    prev($ages);
    echo "4: ".current($ages)."<br />";
    // use the reset function to go back to the first pointer
    reset($ages);
    echo "5: ".current($ages)."<br />";
    // use the end function to go to the last pointer
    end($ages);
    echo "6: ".current($ages)."<br />";
    // moves the pointer past the last value
    next($ages);
    echo "7: ".current($ages)."<br />";
  ?>
  <br />
  <?php
    reset($ages);
    // while loop that moves the array pointer
    // similar to for each
    while($age = current($ages)){
      echo $age.", ";
      next($ages);
    }
  ?>
</html>
