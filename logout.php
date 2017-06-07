<?php
  setcookie("colorlearn2017", "", time() - 86400, "/");
?>
<html>
<head>
  <meta charset="utf-8">
  <title>ColorLearn - Logged Out</title>

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

<?php
  echo "<p>You have been logged out successfully.</p>";

  echo "<p><a href='welcome.php'>Return to welcome screen</a></p>";
?>

</body>
</html>
