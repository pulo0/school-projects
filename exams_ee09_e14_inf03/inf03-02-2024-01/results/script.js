function resetForm() {
  document.getElementById("name-input").value = "";
  document.getElementById("lastname").value = "";
  document.getElementById("email").value = "";
}

function sendForm() {
  const par = document.getElementById("paragraph");
  const nameInput = document.getElementById("name-input").value;
  const lastname = document.getElementById("lastname").value;
  const email = document.getElementById("email").value;
  const reportOptions = document.getElementById("report").value;

  let formattedEmail = email.toLowerCase();

  par.innerHTML = `${nameInput} ${lastname}<br>${formattedEmail}<br>Usługa: ${reportOptions}`;
}
