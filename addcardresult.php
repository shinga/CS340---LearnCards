<html>
<head>
  <meta charset="utf-8">
  <title>ColorLearn - Add card result</title>

  <!-- include the minimized stylesheet -->
  <link rel="stylesheet" href="./material.min.css">

  <!-- include the minimized script -->
  <script type="text/javascript" src="./material.min.js"></script>

  <!-- include the material icon font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">

  <!-- include the roboto fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
</head>
<body>

<!-- todo: user input validation -->

<?php
  // include the database connection information
  include "connect.php";

  // set all error output on
  ini_set("log_errors", 1);
  ini_set("error_log", "demo_errors.log");
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  // set up the database connection object
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // check for error
  if (!$conn) { die("Could not connect: " . mysqli_error()); }

  // get fields submitted from form by post method
  $providedFront = $_POST["frontside"];
  $providedBack = $_POST["backside"];
  $providedLang = $_POST["language"];

  // insert registration info into the proj_Users table
  $query = "INSERT INTO proj_Card (cFront, cBack, creator, cLanguage) VALUES (" .
            "'" . $providedFront . "', " .
            "'" . $providedBack . "', " .
            "'" . $_COOKIE["learncards2017"] . "', " .
            "'" . $providedLang . "');";
  $result = mysqli_query($conn, $query);

  // check for error
  if (!$result) { die("Insert into database failed."); }

  // no result set to free: here, because of the INSERT operation, $result is a boolean
  // mysqli_free_result($result);

  // close connection
  mysqli_close($conn);

  // output success message to user
  echo "<p>You've added the card: [ " . $providedFront . " ] || [ " . $providedBack . " ]</p>";
  echo "<br><p><a href='addcard.php'>Back</a></p>";
  echo "<br><br>";
  echo "<p><a href='welcome.php'>Back to welcome page</a></p>";
?>

</body>
</html>
