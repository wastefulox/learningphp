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
  $menu_name = "Today's Widget Trivia";
  $position = (int) 4;
  $visible = (int) 1;

  // Escape all strings
  $menu_name = mysqli_real_escape_string($connection, $menu_name);

  // 2. Perform Database Query
  $query  = "INSERT ";
  $query .= "INTO subjects (menu_name, position, visible) ";
  $query .= "VALUES ('{$menu_name}', {$position}, {$visible}) ";
  // $result is a resource of database rows
  $result = mysqli_query($connection, $query);
  // tests if there was a database error
  if ($result){
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
