<?php
  function helloTo($greeting, $name, $punctuation){
    return $greeting." ".$name.$punctuation."<br />";
  }

  function redirectTo($new_location){
    header("Location: ".$new_location);
    exit;
  }
?>
