const panel = document.getElementsByClassName('profile-container-main-admin-button');

for (let i = 0; i < panel.length; i++) {
  panel[i].addEventListener('click', function() {
    this.classList.toggle('active');
    var content = this.nextElementSibling;
    if (content.style.display === 'block') {
      content.style.display = 'none';
    } else {
      content.style.display = 'block';
    }
  });
}
