function checkPrices() {
  const checkboxes = document.getElementsByName("check");
  const par = document.getElementById("par");

  const prices = { peeling: 45, mask: 30, massage: 20, makeup: 50 };

  let result = 0;

  if (checkboxes[0].checked) {
    result += prices.peeling;
  }
  if (checkboxes[1].checked) {
    result += prices.mask;
  }
  if (checkboxes[2].checked) {
    result += prices.massage;
  }
  if (checkboxes[3].checked) {
    result += prices.makeup;
  }

  par.innerHTML = `Cena zabiegów: ${result}`;
}
