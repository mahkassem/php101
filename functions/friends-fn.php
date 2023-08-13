<?php
  $friends = [
    [
      'name' => 'Friend 1',
      'description' => 'This is my friend 1'
    ],
    [
      'name' => 'Friend 2',
      'description' => 'This is my friend 2'
    ],
    [
      'name' => 'Friend 3',
      'description' => 'This is my friend 3'
    ]
  ];

  function renderFriends($friends)
  {
    echo '<div class="friends">';
    // loop through each friend
    foreach ($friends as $friend) {
      echo '<div class="friend-card">';
      echo '<h2>' . $friend['name'] . '</h2>';
      echo '<p>' . $friend['description'] . '</p>';
      echo '</div>';
    }
    echo '</div>';
  }
