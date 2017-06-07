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

  <title>LearnCards - My Decks</title>

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
        <em><h4>My Decks</h4></em>
      </div>
    </div>
  </div>
</div>

<!-- content -->

<div class="contentContainer">



<?php
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
  $thisuser = "pokemonmaster";

  // form the query
  // $query = "SELECT dName AS 'Deck Name', dDesc AS 'Deck Description', dLanguage AS 'Deck Language' FROM proj_Deck  WHERE creator='" . $thisuser . "';";
  $query = "INSERT INTO proj_Deck (dID, dName, dDesc, dAccess, dLanguage, creator) VALUES
  (7, 'My pokemon names', 'I love japanese', 'public', 'japanese', 'pokemonmaster'),
  (8, 'Brocks pokemon names', 'He loves japanese women', 'public', 'japanese', 'pokemonmaster'),
  (9, 'My friends names', 'These are in spanish', 'public', 'german', 'pokemonmaster'),
  (10, 'Pikachus first words', 'Babychu', 'public', 'english', 'pokemonmaster'),
  (12, 'Animals', 'They are like pokemon but not', 'public', 'german', 'pokemonmaster') ;";

  // get result from querying the database`
  $result = mysqli_query($conn, $query);

  // check for error
  if (!$result) { die("Failed to fetch fields from table."); }

  // display all cards belonging to this user
  echo "<div class='mycards-title'>";
    echo "<h4><em>" . $thisuser . "'s Decks</em></h4>";
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



</body>
</html>
