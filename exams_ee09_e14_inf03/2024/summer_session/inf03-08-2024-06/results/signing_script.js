let barPercentage = 16; // hardcoded but it works
document.querySelectorAll("input").forEach((e) => {
  // firstly, this width that I update, I actually override
  // this 4% in the css stylesheats so I override to
  // have 16% at start and add up to barPercentage 12% each time
  // event listener instantiates
  const progressBar = document.getElementById("bar");
  e.addEventListener("focusout", (item) => {
    if (progressBar.style.width == "100%") {
      barPercentage = 0;
    } else {
      progressBar.style.width = `${barPercentage}%`;
      barPercentage += 12;
    }
  });
});

function activate(id) {
  let client = document.getElementById("client");
  let address = document.getElementById("address");
  let contact = document.getElementById("contact");

  const displayOption = { open: "block", close: "none" };

  switch (id) {
    case "client":
      address.style.display = displayOption.close;
      contact.style.display = displayOption.close;
      client.style.display = displayOption.open;
      break;
    case "address":
      client.style.display = displayOption.close;
      address.style.display = displayOption.open;
      contact.style.display = displayOption.close;
      break;
    case "contact":
      contact.style.display = displayOption.open;
      address.style.display = displayOption.close;
      client.style.display = displayOption.close;
      break;
  }
}

function sendData() {
  const nameInput = document.getElementById("name-input");
  const lastnameInput = document.getElementById("lastname-input");
  const dateInput = document.getElementById("date-input");
  const streetInput = document.getElementById("street-input");
  const numberInput = document.getElementById("number-input");
  const cityInput = document.getElementById("city-input");
  const phoneInput = document.getElementById("phone-input");
  const rodoCheck = document.getElementById("rodo-check").checked
    ? "on"
    : "off";

  console.log(
    `${nameInput.value}, ${lastnameInput.value}, ${dateInput.value}, ${streetInput.value}, ${numberInput.value}, ${cityInput.value}, ${phoneInput.value}, ${rodoCheck}`
  );
}
