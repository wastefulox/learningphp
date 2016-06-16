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
  // 2. Perform Database Query
  $query  = "SELECT * ";
  $query .= "FROM subjects ";
  $query .= "WHERE visible = 1 ";
  $query .= "ORDER BY position ASC";
  // $result is a resource of database rows
  $result = mysqli_query($connection, $query);
  // tests if there was a database error
  if (!$result){
    die("Database Query Failed");
  }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Databases</title>
</head>
<body>
  
  <?php
    // 3. Use returned data (if any)
    // while there is data to fetch, cycle through. once no data left, null
    while($row = mysqli_fetch_assoc($result)){
      // output data from each row
      echo $row["id"]."<br />";
      echo $row["menu_name"]."<br />";
      echo $row["position"]."<br />";
      echo $row["visible"]."<br />";
      echo "<hr />";
    }
  ?>
  <?php
    // 4. Rlease returned Database
    mysqli_free_result($result);
  ?>
</html>
<?php
  // 5. Close database connection
  mysqli_close($connection);
?>
