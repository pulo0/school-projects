const maxLength = 15;
const exampleArray = [
  "banana",
  "apple",
  "acai",
  "acerola cherries",
  "berries",
  "annona",
  "avocado",
  "black currant",
  "black cherries",
  "blood lime",
  "blue java banana",
  "grape",
  "coco plum",
  "cornelian cherry",
  "courgette",
  "crab apple",
  "citron",
  "chinese white pear",
  "cherry",
  "cempedak",
  "cedar bay cherry",
  "crimson gold apple",
  "cortland apple",
  "cramberry",
  "ububese",
];
const exampleToAddArray = [
  "dewberry",
  "discovery apple",
  "dragonfruit",
  "durian",
  "duku fruit",
  "desert quandong",
  "double coconut",
  "entawak",
  "ensete",
  "early girl tomato",
  "eggplant",
  "oil palm",
  "orange",
  "orangelo",
  "oriental cherry",
];
let exampleString = "You could do better";
let exampleNumber = 18.523132;

// TODO: Math function
// sqrt, floor, ceil, round, pi, random (with floor/ceil), pow

function selectListMethods() {
  // Variables declarations
  let paragraph = document.getElementById("array-par");
  let paragraphStr = document.getElementById("string-par");
  let paragraphNum = document.getElementById("number-par");
  let list = document.getElementById("methods");
  let radio = document.querySelector('input[name="letters"]:checked').value;
  let randomItem = exampleToAddArray[Math.floor(Math.random() * maxLength)];
  let selectListValues = list.value;
  let arr = exampleArray;

  console.log(radio);
  switch (radio) {
    case "upper":
      paragraphStr.innerHTML = exampleString.toUpperCase() + "<br>";
      break;
    case "lower":
      paragraphStr.innerHTML = exampleString.toLowerCase() + "<br>";
      break;
    default:
      break;
  }

  switch (selectListValues) {
    // Array methods
    case "push":
      arr.push(randomItem);
      paragraph.innerHTML = `Added ${randomItem} with push(): ${arr}`;
      break;
    case "pop":
      arr.pop();
      paragraph.innerHTML = `Deleted the last with pop(): ${arr}`;
      break;
    case "shift":
      let firstElement = arr.shift();
      paragraph.innerHTML = `Deleted the first (${firstElement}) with shift(): ${arr}`;
      break;
    case "unshift":
      arr.unshift(randomItem);
      paragraph.innerHTML = `Added (${randomItem}) with unshift() at the beginning: ${arr}`;
      break;
    case "splice":
      arr.splice(2, 0, randomItem);
      paragraph.innerHTML = `Added (${randomItem}) with splice() at the index 2: ${arr}`;
      break;
    case "reverse":
      arr.reverse((a, b) => a - b);
      paragraph.innerHTML = `Reversed the array: ${arr}`;
      break;
    case "slice":
      let slicedArray = arr.slice(1, 4);
      paragraph.innerHTML = `Slice the example array to display new array from index 1 to 4: ${slicedArray}`;
      break;
    case "join":
      let joinedArray = arr.join(" # ");
      paragraph.innerHTML = `Joined array to a string (typeof is: ${typeof joinedArray}) and array here: ${joinedArray}`;
      break;
    // String methods
    case "includes":
      const word = "better";
      let isIncluding = exampleString.includes(word);
      paragraph.innerHTML = `Is the word ${word} in the string? ${isIncluding}`;
      break;
    case "concat":
      exampleString = exampleString.concat(
        ", ",
        "you are doing great for now..."
      );
      paragraph.innerHTML = `Concatenated the string, here above.`;
      break;
    case "match":
      let regex = /[A-Z]/g;
      let matched = exampleString.match(regex);
      paragraph.innerHTML = `Matched the string with regex (all uppercase letters only): ${matched}`;
      break;
    case "search":
      let searched = exampleString.search("better");
      paragraph.innerHTML = `Searched the string for the word 'better' and found it at index: ${searched}`;
      break;
    // Math functions
    case "sqrt":
      paragraphNum.innerHTML = `Example number (${exampleNumber}) to sqrt: ${Math.sqrt(
        exampleNumber
      )}`;
      break;
    case "sqrt2":
      paragraphNum.innerHTML = `Square root of 2: ${Math.SQRT2}`;
      break;
    case "abs":
      paragraphNum.innerHTML = `Absolute number of exampleNumber (${exampleNumber}): ${Math.abs(
        exampleNumber
      )}`;
      break;
    case "floor":
      paragraphNum.innerHTML = `Floored ${exampleNumber} to floor: ${Math.floor(
        exampleNumber
      )}`;
      break;
    case "ceil":
      paragraphNum.innerHTML = `Ceiled ${exampleNumber} to ceil: ${Math.ceil(
        exampleNumber
      )}`;
      break;
    case "round":
      paragraphNum.innerHTML = `Rounded ${exampleNumber} to round: ${Math.round(
        exampleNumber
      )}`;
      break;
    case "sign":
      paragraphNum.innerHTML = `Returning 1 or -1 depending on the number: ${Math.sign(
        exampleNumber
      )}`;
      break;
    case "pi":
      paragraphNum.innerHTML = `Number PI: ${Math.PI()}`;
      break;
    case "random":
      paragraphNum.innerHTML = `Pseudo-random number (without rounding up from 0 to 10): ${
        Math.random() * 10
      }`;
      break;
    case "random-floor":
      paragraphNum.innerHTML = `Pseudo-random number rounded down (floor, from 0 to 10): ${Math.floor(
        Math.random() * 10
      )}`;
      break;
    case "random-ceil":
      paragraphNum.innerHTML = `Pseudo-random number rounded up (ceil, from 0 to 10): ${Math.ceil(
        Math.random() * 10
      )}`;
      break;
    case "pow":
      let rand = Math.floor(Math.random() * 10) + 1;
      paragraphNum.innerHTML = `Number (${exampleNumber}) to the power of random int between 1 and 10 (now: ${rand}): ${Math.pow(
        exampleNumber,
        rand
      )}`;
      break;
    // Number functions
    case "tofixed":
      paragraphNum.innerHTML = `Number to fixed with 2 decimal numbers: ${exampleNumber.toFixed(
        2
      )}`;
      break;
    case "toprecision":
      paragraphNum.innerHTML = `String representing this number to specified digits: ${exampleNumber.toPrecision(
        1
      )}`;
      break;
    default:
      paragraph.innerHTML = "No data added";
      break;
  }
}
