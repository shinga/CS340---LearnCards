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

    <title>LearnCards - Welcome</title>

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
        <em><h4>Welcome</h4></em>
      </div>
    </div>
  </div>
</div>

<!-- content -->

<div class="contentContainer">

  <div class="contentLeftContainer">
    <div class="myCardsCard mdl-shadow--8dp">
      <div class="myCardsCardText">
        <h4><i class="material-icons myCardsLogo">content_copy</i></h4>
      </div>
    </div>
    <div class="myDecksCard mdl-shadow--8dp">
      <div class="myDecksCardText">
        <h4><i class="material-icons myDecksLogo">content_copy</i></h4>
      </div>
    </div>
    <div class="myQuizzesCard mdl-shadow--8dp">
      <div class="myQuizzesCardText">
        <h4><i class="material-icons myQuizzesLogo">content_copy</i></h4>
      </div>
    </div>
  </div>

  <div class="contentCenterContainer">
    <div class="buttonsCard mdl-shadow--8dp">
      <div class="loginButton mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="loginButton">
        Log In
      </div>
      <script>
        document.getElementById("loginButton").addEventListener("click", function(e) {
          location.href="login.php";
        });
      </script>
      <div class="signupButton mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" id="signupButton">
        Sign Up
      </div>
      <script>
        document.getElementById("signupButton").addEventListener("click", function(e) {
          location.href="signup.php";
        });
      </script>
    </div>
  </div>

  <div class="contentRightContainer">
    <div class="allCardsCard mdl-shadow--8dp">
      <div class="allCardsCardText">
        <h4><i class="material-icons allCardsLogo">content_copy</i></h4>
      </div>
    </div>
    <div class="allDecksCard mdl-shadow--8dp">
      <div class="allDecksCardText">
        <h4><i class="material-icons allDecksLogo">content_copy</i></h4>
      </div>
    </div>
    <div class="allQuizzesCard mdl-shadow--8dp">
      <div class="allQuizzesCardText">
        <h4><i class="material-icons allQuizzesLogo">content_copy</i></h4>
      </div>
    </div>
  </div>

</div>

  </body>
</html>
