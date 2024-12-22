function showPrices() {
  const radios = document.getElementsByName("radio-type");
  const par = document.getElementById("par");

  // For short = 25 - 10
  // For medium = 30 - 10
  // For half-long = 40 - 10
  // For long = 50 - 10
  const prices = { short: 15, medium: 20, "half-long": 30, long: 40 };

  if (radios[0].checked) {
    par.innerHTML = `cena promocyjna: ${prices.short}`;
  } else if (radios[1].checked) {
    par.innerHTML = `cena promocyjna: ${prices.medium}`;
  } else if (radios[2].checked) {
    par.innerHTML = `cena promocyjna: ${prices["half-long"]}`;
  } else {
    par.innerHTML = `cena promocyjna: ${prices.long}`;
  }
}
