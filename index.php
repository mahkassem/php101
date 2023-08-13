<?php require_once './classes/user.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Personal Home Page</title>
  <link rel="stylesheet" href="./css/index.css">
</head>

<body>
  <h1>My Personal Home Page</h1>
  <?php
  $user = new Friend('John', 'Doe', 25, 'This is my friend');

  echo '<h2>' . $user->getFName() . ' ' . $user->getLName() . '</h2>';
  echo '<p>' . $user->age . '</p>';
  echo '<p>' . $user->getDescription() . '</p>';

  ?>
  <div id="my-friends"></div>
  <a href="friends.php">Friends</a>
  <!-- <script src="./js/index.js"></script> -->
</body>

</html>