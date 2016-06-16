<?php
  // * Presence
  function hasPresence($value){
    return isset($value) && $value !== "";
  };

  // * String Length
  // maximum length
  function underMaxLength($value, $max){
    return strlen($value) <= $max;
  };

  // * Inclusion in a set
  function hasInclusionIn($value, $set){
    in_array($value, $set);
  }

  function validateMaxLengths($fields_with_max_lengths){
    global $errors;
    foreach($fields_with_max_lengths as $key => $max){
      $value = trim($_POST[$key]);
      if(!underMaxLength($value, $max)){
        $errors[$key] = ucfirst($key)." is too long";
      }
    }
  }

  function outputErrors($errors=[]){
    $output="";
    if(!empty($errors)){
      $output .= "<div class=\"error\">";
      $output .= "Please fix the following errors:";
      $output .= "<ul>";
      foreach ($errors as $key => $error){
        $output .= "<li>{$error}</li>";
      }
      $output .= "</ul>";
      $output .= "</div>";
    }
    return $output;
  };
?>
