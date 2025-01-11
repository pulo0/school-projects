const containerOne = document.getElementById("container-one");
const containerTwo = document.getElementById("container-two");
const containerThree = document.getElementById("container-three");

function contactInfoAccept() {
  containerOne.style.opacity = 0;
  containerTwo.style.opacity = 1;
}

function emailInfoAccept() {
  containerTwo.style.opacity = 0;
  containerThree.style.opacity = 1;
}

function passwordInfoAccept() {
  const firstname = document.getElementById("firstname");
  const lastname = document.getElementById("lastname");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirm-password");

  if (passwordInput.value !== confirmPasswordInput.value) {
    alert("Podane hasła różnią się");
  } else {
    console.log(`Witaj ${firstname.value} ${lastname.value}`);
  }
}
