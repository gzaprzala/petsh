const receiver = document.querySelector("[name='receiver_id']");
const chat = document.querySelector(".chat-container-main-right-messages");

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("GET", `/chat?room=${receiver.value}`, true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        let parser = new DOMParser();
        let doc = parser.parseFromString(data, "text/html");
        let specificDiv = doc.querySelector(".chat-container-main-right-messages");
        chat.innerHTML = specificDiv.innerHTML;
        updateScroll();
      }
    }
  }

  xhr.send();
}, 2000);

function updateScroll(){
  var element = document.getElementById("chat");
  element.scrollTop = element.scrollHeight;
}
