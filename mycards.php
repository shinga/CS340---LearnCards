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

  <title>LearnCards - My Cards</title>

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
        <em><h4>My Cards</h4></em>
      </div>
    </div>
  </div>
</div>

<div class="mycards-contentContainer">
  <div class="mycards-contentCard mdl-shadow--8dp">

<?php
  // include the database connection information
  include "connect.php";

  // set all error output on
  ini_set("log_errors", 1);
  ini_set("error_log", "demo_errors.log");
  ini_set("display_errors", 1);
  error_reporting(E_ALL);

  // connect to the database
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  // check for error
  if (!$conn) { die("Could not connect: " . mysqli_error()); }

  // store the logged in user's username in a variable
  // var thisuser = $_COOKIE["learncards2017"];
  $thisuser = "pokemonmaster";

  // form the query
  $query = "SELECT cFront, cBack, cLanguage FROM proj_Card C WHERE C.creator='" . $thisuser . "';";

  // get result from querying the database`
  $result = mysqli_query($conn, $query);

  // check for error
  if (!$result) { die("Failed to fetch fields from table."); }

  // display all cards belonging to this user
  echo "<div class='mycards-title'>";
    echo "<h4><em>" . $thisuser . "'s Cards</em></h4>";
  echo "</div>";
  echo "<div class='mycards-table'>";

  echo "<table>";

    // echo headers
    for ($i = 0; $i < mysqli_num_fields($result); $i++) {
      $field = mysqli_fetch_field($result);
      echo "<td><b>{$field->name}</b></td>";
    }

    // echo rows
    while ($row = mysqli_fetch_row($result)) {
      // one row at a time
      echo "<tr>";
      foreach ($row as $cell) { echo "<td>$cell</td>"; }
      echo "</tr>";
    }

  echo "</table>";
  echo "</div>";

  // free resources
  mysqli_free_result($result);
  mysqli_close($conn);
?>

  </div>
</div>


</body>
</html>


