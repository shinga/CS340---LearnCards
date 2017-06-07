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

  <title>LearnCards - All Quizzes</title>

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

<div class="headerContainer">
  <div class="headerCard">
    <div class="headerCardLogo mdl-shadow--8dp">
      <div class="headerCardLogoText">
        <h4><i class="material-icons learnCardsLogo">content_copy</i>LearnCards</h4>
      </div>
    </div>
    <div class="headerCardTitle mdl-shadow--8dp">
      <div class="headerCardTitleText">
        <em><h4>All Quizzes</h4></em>
      </div>
    </div>
  </div>
</div>

<!-- content -->

<div class="contentContainer">

<?php

  // list all of the cards for the current user
  include "connect.php";

  ini_set("log_errors", 1);
  ini_set("error_log", "demo_errors.log");
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  echo "<pre>";

  // connect to the database
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // check for error
  if (!$conn) { die("Could not connect: " . mysqli_error()); }

  // store the logged in user's username in a variable
  var thisuser = $_COOKIE["learncards2017"];

  // form the query
  $query = "SELECT cID, cFront, cBack, creator, cLanguage FROM proj_Cards WHERE creator = '" .
             thisuser . "';";

  // get result from querying the database
  $result = mysqli_query($conn, $query);

  // check for error
  if (!$result) { die("Failed to fetch fields from table."); }

  // display all cards belonging to this user - loop over all of the rows in the returned result, in the
  // cards layout if time




  // sample - users
  echo "<h2>Users</h2>";

  echo "<table border='1'><tr>";

  for ($i = 0; $i < mysqli_num_fields($result); $i++) {

    $field = mysqli_fetch_field($result);
    echo "<td><b>{$field->name}</b></td>";

  }

  while ($row = mysqli_fetch_row($result)) {

    echo "<tr>";
    foreach ($row as $cell) { echo "<td>$cell</td>"; }
    echo "</tr>";

  }




  // free resources
  mysqli_free_result($result);
  mysqli_close($conn);

  echo "</pre>";
?>


</div>


</body>
</html>


