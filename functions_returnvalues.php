<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Functions: Return Values</title>
</head>
<body>
  <h1 class=""></h1>
  <p></p>
  <?php
    function addValues($val1, $val2){
      $sum = $val1 + $val2;
      return $sum;
    }

    $result = addValues(3,4);
    echo $result."<br />";
    $result2 = addValues(5,$result);
    echo $result2."<br />";
  ?>
  <br />
  <?php
    function chineseZodiac($year){
      switch(($year - 4) % 12){
        case 0: return 'Rat';
        case 1: return 'Ox';
        case 2: return 'Tiger';
        case 3: return 'Rabbit';
        case 4: return 'Dragon';
        case 5: return 'Snake';
        case 6: return 'Horse';
        case 7: return 'Goat';
        case 8: return 'Monkey';
        case 9: return 'Rooster';
        case 10: return 'Dog';
        case 11: return 'Pig';
      };
    };

    $brandiZodiac = chineseZodiac(1984);
    $matZodiac = chineseZodiac(1983);
    $kyraZodiac = chineseZodiac(2011);
    echo "Kyra's birth year was the year of the {$kyraZodiac}.<br />";
    echo "Daddy's birth year was the year of the {$matZodiac}.<br />";
    echo "Mommy's biryh year was the year of the {$brandiZodiac}.<br />";

  ?>

</html>
