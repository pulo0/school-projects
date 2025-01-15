const displayOptions = { visible: "block", hidden: "none" };

const quoteElementOne = document.getElementById("one-quote");
const quoteElementTwo = document.getElementById("two-quote");
const quoteElementThree = document.getElementById("three-quote");

function onQuoteOneClick() {
  quoteElementOne.style.display = displayOptions.hidden;
  quoteElementTwo.style.display = displayOptions.visible;
}

function onQuoteTwoClick() {
  quoteElementTwo.style.display = displayOptions.hidden;
  quoteElementThree.style.display = displayOptions.visible;
}

function onQuoteThreeClick() {
  quoteElementThree.style.display = displayOptions.hidden;
  quoteElementOne.style.display = displayOptions.visible;
}
