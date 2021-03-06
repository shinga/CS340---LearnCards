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
        <em><h4>Add card</h4></em>
      </div>
    </div>
  </div>
</div>

<!-- content -->

<div class="signup-contentContainer">

  <div class="signup-signupFormCard mdl-shadow--8dp">

    <div class="signup-signupForm">

      <form action="addcardresult.php" method="post" id="addcard">
        <div>
            <label for="usernameInput">Front side: </label>
          <input type="text" id="frontInput" name="frontside" size="50">
        </div>
        <div>
          <label for="irlnameInput">Back side: </label>
          <input type="text" id="backInput" name="backside" size="50">
        </div>
        <div>
          <label for="irlnameInput">Language: </label>
          <select name="language" form="addcard">
              <option value="english">English</option>
              <option value="spanish">Spanish</option>
              <option value="german">German</option>
              <option value="french">French</option>
              <option value="arabic">Arabic</option>
              <option value="Chinese">Chinese</option>
              <option value="japanese">Japanese</option>
              <option value="korean">Korean</option>

        </div>
        <div class="signup-signupFormSubmitButton">
          <input type="submit" value="Add a card!">
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
