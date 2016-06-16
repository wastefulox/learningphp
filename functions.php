<?php
  // output validation errors one at a time.
  // styling to be done through css with .error =
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

<?php
  // highlights error on name field by pointing to that field directly
  function highlightError($errors=[]){
    $output = "";
    if (array_key_exists($errors, "name")){
      $output .= "<span class=\"error-field\">&lt;&lt;</span>";
    }
  };
?>
