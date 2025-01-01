const par = document.getElementById("paragraph");
const checkTerm = document.getElementById("terms");

function resetInput() {
  document.getElementById('name').value = '';
  document.getElementById('lastname').value = '';
  document.getElementById('email').value = '';
  document.getElementById('report').value = '';
}

function acceptReport() {
  const nameUser = document.getElementById("name").value;
  const lastname = document.getElementById("lastname").value;
  const reportDesc = document.getElementById("report").value;

  if (!checkTerm.checked) {
    par.style.color = "red";
    par.innerHTML = "Musisz zapoznać się z regulaminem";
  } else {
    par.style.color = "navy";
    let nameCaps = nameUser.toUpperCase();
    let lastnameCaps = lastname.toUpperCase();
    par.innerHTML = `${nameCaps} ${lastnameCaps}<br>Treść Twojej sprawy: ${reportDesc}`;
  }
}
