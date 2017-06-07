<html>
<head>
  <meta charset="utf-8">

  <meta name="robots" content="noindex,nofollow,noodp,noarchive,nosnippet">
  <meta name="referrer" content="no-referrer">
  <meta name="author" content="LearnCards">
  <meta name="description" content="A simple, colorful flashcard app for learning languages.">
  <meta name="keywords" content="flashcard,color,learn,language,simple">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>LearnCards - Log In</title>

  <!-- include the minimized stylesheet -->
  <link rel="stylesheet" type="text/css" href="material.min.css">

  <!-- include the super1000 stylesheet for desktop layout -->
  <link rel="stylesheet" type="text/css" media="(min-width: 1000px)" href="super1000-welcome.css">

  <!-- include the minimized script -->
  <script type="text/javascript" src="material.min.js"></script>

  <!-- include the material icon font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- include the roboto fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">

</head>
<body>

<!-- header -->

<div class="headerContainer">`
  <div class="headerCard">
    <div class="headerCardLogo mdl-shadow--8dp">
      <div class="headerCardLogoText">
        <h4><i class="material-icons learnCardsLogo">content_copy</i>LearnCards</h4>
      </div>
    </div>
    <div class="headerCardTitle mdl-shadow--8dp">
      <div class="headerCardTitleText">
        <em><h4>Log In Result</h4></em>
      </div>
    </div>
  </div>
</div>

<!-- content -->

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

  echo "<p>no errors.</p>";

  // get fields submitted from form by post method
  $providedUsername = $_POST["username"];
  $providedPassword = $_POST["password"];

  echo "received: <br><br><br><br><br><br><br>" . $_POST["username"] . $_POST["password"];

  // get the username - password combinations from the proj_Users table in the database
  $query = "SELECT username, pword FROM proj_Users;";
  $result = mysqli_query($conn, $query);

  // check for error
  if (!$result) { die("Query on database failed."); }

  // have variable holding whether a username - password combination from database has been found which matches
  // the provided username - password combination, and try to find match in associative array
  $exists = false;

  echo "<p>Entering the while loop now.</p>";
/*
  while ($row = mysqli_fetch_row($result)) {
    if ($row[0] === $providedUsername) {
      if ($row[1] === $providedPassword) {
        $exists = true;
        break;
      }
    }
  }
*/
  echo "<p>At the end of the while loop, exists is: " . $exists . "</p>";

  // free result set
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);


  // print outcome and possibly set login cookie depending on whether the username - password combo exists
  if ($exists == true) {
    echo "<p>Welcome " . $providedUsername . ", you have been logged in successfully.</p>";
    setcookie("colorlearn2017", $providedUsername, time() + 86400, "/");
    echo "<p><a href='homescreen.php'>Continue to home screen</a></p>";
  } else {
    echo "<p>Sorry, that username and password combination was not found in the database.</p>";
    echo "<p>Sign up for a new account on the sign up page: <a href='signup.php'>Sign up</a></p>";
    echo "<br><br>";
    echo "<p><a href='welcome.php'>Back to welcome page</a></p>";
  }
?>

</body>
</html>
