function manage_favorites(element) {
  const ajax = new XMLHttpRequest();
  ajax.open("POST", "../actions/addToFavoritesAction.php", true);
  ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  if (element.querySelector("i").classList.contains("bxs-heart")) {
    ajax.send(
      "movie_id=" +
        element.dataset.id +
        "&user_id=" +
        element.dataset.userid +
        "&remove"
    );
    ajax.onreadystatechange = function () {
      if (ajax.readyState === XMLHttpRequest.DONE && ajax.status === 200) {
        // alert user of account creation success
        if (ajax.responseText == "success") {
          alert("Removed from favorites");
          element.querySelector("i").classList.remove("bxs-heart");
          element.querySelector("i").classList.add("bx-heart");
        } else {
          alert("Failed to remove from favorites");
        }
      }
    };
  } else {
    ajax.send(
      "movie_id=" +
        element.dataset.id +
        "&user_id=" +
        element.dataset.userid +
        "&add"
    );
    ajax.onreadystatechange = function () {
      if (ajax.readyState === XMLHttpRequest.DONE && ajax.status === 200) {
        // alert user of account creation success
        if (ajax.responseText == "success") {
          alert("Added to favorites");
          element.querySelector("i").classList.remove("bx-heart");
          element.querySelector("i").classList.add("bxs-heart");
        } else {
          alert("Failed to add to favorites");
        }
      }
    };
  }
}
