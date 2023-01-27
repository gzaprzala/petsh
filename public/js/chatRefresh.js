const receiver = document.querySelector("[name='receiver_id']");
const chat = document.querySelector(".chat-container-main-right-messages");

setInterval(() => {
  fetch(`/chat?room=${receiver.value}`, {
    method: 'GET',
  })
    .then(response => response.text())
    .then(data => {
        let parser = new DOMParser();
        let doc = parser.parseFromString(data, "text/html");
        let specificDiv = doc.querySelector(".chat-container-main-right-messages");
        chat.innerHTML = specificDiv.innerHTML;
    })
    .catch(error => console.error(error));
}, 3500);


function updateScroll(){
  var element = document.getElementById("chat");
  element.scrollTop = element.scrollHeight;
}
