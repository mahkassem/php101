

fetch('friends-json.php').then(
  function (response) {
    return response.json();
  }
).then(
  (friends) => {
    var friendsContainer = document.getElementById('my-friends');

    var friendsWrapper = document.createElement('div');
    friendsWrapper.classList.add('friends');

    function renderFriend(friend) {
      var friendCard = document.createElement('div');
      friendCard.classList.add('friend-card');

      var friendName = document.createElement('h2');
      friendName.innerText = friend.name;

      var friendDescription = document.createElement('p');
      friendDescription.innerText = friend.description;

      friendCard.appendChild(friendName);
      friendCard.appendChild(friendDescription);

      return friendCard;
    }

    function renderFriends(friends) {
      friends.forEach(function (friend) {
        var friendCard = renderFriend(friend);
        friendsWrapper.appendChild(friendCard);
      });
    }

    renderFriends(friends);

    friendsContainer.appendChild(friendsWrapper);

    var jsonPage = fetch('json.php').then(
      function (response) {
        return response.json();
      }
    ).then(
      function (json) {
        var friendCard = renderFriend(json);
        friendsWrapper.appendChild(friendCard);
      }
    )

  }
)