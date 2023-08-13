<?php require_once 'functions/friends-fn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Friends</title>
</head>

<body>
  <h1>This is my friends page</h1>
  <?php renderFriends($friends); ?>
  <a href="/">back to home</a>
</body>

</html>