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

<div class="headerContainer">
  <div class="headerCard">
    <div class="headerCardLogo mdl-shadow--8dp">
      <div class="headerCardLogoText">
        <h4><i class="material-icons learnCardsLogo">content_copy</i>LearnCards</h4>
      </div>
    </div>
    <div class="headerCardTitle mdl-shadow--8dp">
      <div class="headerCardTitleText">
        <em><h4>Log In</h4></em>
      </div>
    </div>
  </div>
</div>

<!-- content -->

<div class="contentContainer">


</div>



<?php
  echo "<p>Welcome to the home screen of the application.</p>";

  echo "<p>Click this link to log out: <a href='logout.php'>Log out</a></p>";
?>

<?php
  echo "<footer>";
  echo "<div>";
    
  if (isset($_COOKIE["colorlearn2017"])) { 
    echo "<p>Currently logged in as " . $_COOKIE["colorlearn2017"] . "</p>";
  } else { 
    echo "<p>Currently logged out</p>";
  } 

  echo "</div>";
  echo "</footer>";
?>

</body>
</html>
