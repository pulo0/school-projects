const colorsMap = {
  noPassword: "red",
  weak: "yellow",
  medium: "blue",
  good: "green",
};

// Creating a new paragraph to put information in there
let paragraph = document.createElement("p");
const sectionRight = document.getElementById("right");
paragraph.id = "par";
sectionRight.appendChild(paragraph);

function checkPasswordStrength() {
  // Rest of the task
  const par = document.getElementById("par");
  const input = document.getElementById("input");
  const inputValue = input.value;
  const regex = inputValue.search(/\d/gi);
  const isPasswordHasDigits = regex == -1 ? 0 : regex;
  const inputLen = inputValue.length;

  if (inputLen == 0) {
    par.innerHTML = "WPISZ HASŁO!";
    par.style.color = colorsMap.noPassword;
  }

  console.log(isPasswordHasDigits);

  if (inputLen < 4 && inputLen > 0) {
    par.innerHTML = "SŁABE";
    par.style.color = colorsMap.weak;
  } else if (inputLen >= 4 && inputLen <= 6 && isPasswordHasDigits != 0) {
    par.innerHTML = "ŚREDNIE";
    par.style.color = colorsMap.medium;
  } else if (inputLen >= 7 && isPasswordHasDigits != 0) {
    par.innerHTML = "DOBRE";
    par.style.color = colorsMap.good;
  }
}
