const chat = document.getElementById("chat");

const msgClasses = { krzysiek: "msg-k", jolka: "msg-j" };
const msgSrc = { krzysiek: "Krzysiek.jpg", jolka: "Jolka.jpg" };

function createMessage(src, className, message) {
  // This creates a structure of elements like this
  // <section>
  //      <img src='...'>
  //      <p>...</p>
  // </section>
  // and adds it to chat element making another chat bubble
  // corresponding to which user (other functionalities are in different methods)
  let msgContainer = document.createElement("section");
  // or as an alternative use msgContainer.classList.add('msg-j')
  msgContainer.className = `${className}`;

  let imgContainer = document.createElement("img");
  imgContainer.src = `pliki/${src}`;

  let msgText = document.createElement("p");
  // or .innerHTML as an alternative
  msgText.textContent = `${message}`;

  msgContainer.appendChild(imgContainer);
  msgContainer.appendChild(msgText);
  return msgContainer;
}

function sendMessage() {
  const msgInput = document.getElementById("msg-send");

  chat.append(createMessage(msgSrc.jolka, msgClasses.jolka, msgInput.value));
}

function randomMessage() {
  const messages = [
    "Świetnie!",
    "Kto gra główną rolę?",
    "Lubisz filmy Tego reżysera?",
    "Będę 10 minut wcześniej",
    "Może kupimy sobie popcorn?",
    "Ja wolę Colę",
    "Zaproszę jeszcze Grześka",
    "Tydzień temu też byłem w kinie na Diunie",
    "Ja funduję bilety",
  ];

  let rNum = Math.round(Math.random() * (messages.length - 1));
  chat.append(createMessage(msgSrc.krzysiek, msgClasses.krzysiek, messages[rNum]));
}
