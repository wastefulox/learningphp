<?php
  // 1. Create a Database Connection
  $dbhost = "localhost";
  $dbuser = "widget_cms";
  $dbpass = "S3cr3tP@ssw0rd";
  $dbname = "widget_corp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  // Test if connection occurred.
  if(mysqli_connect_errno()){
    die("Database Connection Failed: ".mysqli_connect_error()." (".mysqli_connect_errno().")"
    );
  }

?>
<?php
  // Often these are form values in $_POST
  $menu_name = "Delete me";
  $position = 4;
  $visible = 1;
  $id = 5;

  // 2. Perform Database Query
  $query  = "UPDATE subjects SET  ";
  $query .= "menu_name = '{$menu_name}', ";
  $query .= "position = {$position}, ";
  $query .= "visible = {$visible} ";
  $query .= "WHERE id = {$id}";
  // $result is a resource of database rows
  $result = mysqli_query($connection, $query);
  // tests if there was a database error
  if ($result && mysqli_affected_rows($connection) == 1){
    // Success
    // redirect_to("somepage.php");
    echo "You win!";
  } else {
    // Failure
    // $message = "Subject creation failed"
    die("Database Query Failed: ".mysqli_error($connection));
  }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Databases</title>
</head>
<body>

  <?php

  ?>
  <?php

  ?>
</html>
<?php
  // 5. Close database connection
  mysqli_close($connection);
?>
