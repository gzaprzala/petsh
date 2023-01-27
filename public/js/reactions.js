const likes = document.querySelectorAll('.search-container-cards-like');
const dislikes = document.querySelectorAll('.search-container-cards-dislike');
const likesCount = document.querySelector(".search-container-cards-card-reactions-likes");
const dislikesCount = document.querySelector(".search-container-cards-card-reactions-dislikes");

function addLike() {
  const idContainer = this;
  const parentDiv = idContainer.parentElement;
  const id = parentDiv.getAttribute('id');

  fetch(`/like/${id}`, {
    method: 'POST',
  })
    .then(() => {
      idContainer.innerHTML = parseInt(idContainer.innerHTML) + 1;
    })

  fetch(`/search`, {
    method: 'GET',
    })
    .then(response => response.text())
    .then(data => {
      let parser = new DOMParser();
      let doc = parser.parseFromString(data, "text/html");
      let specificDiv = doc.querySelector(".search-container-cards-card-reactions-likes");
      likesCount.innerHTML = specificDiv.innerHTML;
    })
}

function addDislike() {
  const idContainer = this;
  const parentDiv = idContainer.parentElement;
  const id = parentDiv.getAttribute('id');

  fetch(`/dislike/${id}`, {
    method: 'POST',
  })
    .then(() => {
      idContainer.innerHTML = parseInt(idContainer.innerHTML) + 1;
    })

  fetch(`/search`, {
    method: 'GET',
    })
    .then(response => response.text())
    .then(data => {
      let parser = new DOMParser();
      let doc = parser.parseFromString(data, "text/html");
      let specificDiv = doc.querySelector(".search-container-cards-card-reactions-dislikes");
      dislikesCount.innerHTML = specificDiv.innerHTML;
    })
}

likes.forEach(like => {
    like.addEventListener('click', addLike);
});

dislikes.forEach(dislike => {
    dislike.addEventListener('click', addDislike);
});