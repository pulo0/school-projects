function clearSpan() {
    document.getElementById("demo").innerHTML = "";
    document.getElementById("addDemo").innerHTML = "";
}
function upCase() {
    let txt = prompt("Give some text please :)");
    document.getElementById("demo").innerHTML = `Your text before toUpperCase(): ${txt}`; 
    document.getElementById("addDemo").innerHTML = `Your text after toUpperCase(): ${txt.toUpperCase()}`;
}
function downCase() {
    let txt = prompt("Give some text please :)");
    document.getElementById("demo").innerHTML = `Your text before toLowerCase(): ${txt}`; 
    document.getElementById("addDemo").innerHTML = `Your text after toLowerCase(): ${txt.toLowerCase()}`;
}
function sqrtRoot() {
    let num = prompt("Give some number to square with :)");
    document.getElementById("demo").innerHTML = `Your sqrtRoot of ${num} equals - ${Number(Math.sqrt(num))}`;
}
function findMatch() {
    let txt1 = prompt("Give me a text that probably have 'a' in it");
    document.getElementById("demo").innerHTML = `The text "${txt1}" has 'a' ${txt1.match(new RegExp(/a/g)).length} times`;
}
function randomNum() {
    document.getElementById("demo").innerHTML = ((Math.random()*9)+1).toFixed(0);
}
function lenghtTxt() {
    let txt = prompt("Please give some text :(");
    document.getElementById("demo").innerHTML =  `Your text consists of ${txt.length} signs`;
}
function wordLetterSearch() {
    let exTxt = `Let's go to McDonald's. There's a lot of stuff at McDonald's`;
    let userChoice = prompt(`Please give w letter or word you want to search\r"Let's go to McDonald's. There's a lot of stuff at McDonald's"`);
    let noLetter = `Unfortunately, your letter ${userChoice} doesn't exist in the example, it has ${exTxt.search(userChoice)} position`;
    let yesLetter = `A string that you want to search: '${userChoice}' is at ${exTxt.search(userChoice)} position`;
    document.getElementById("demo").innerHTML = exTxt;
    let condition = exTxt.search(userChoice) != -1 ? yesLetter : noLetter;
    document.getElementById("addDemo").innerHTML = condition;
}

function combineTwoArrays() {
    const arr1 = ["Cat", "Dog", "Mouse", "Rabbit"];
    const arr2 = ["Toy", "Boy", "Rat"];
    const arr3 = arr1.concat(arr2);
    document.getElementById("demo").innerHTML = arr3;
}

function cutAString() {
    let str = prompt("Please give a string for the cutting! :)");
    let numSliceMin = prompt("And one more thing, give mininum when to slice :)");
    let numSliceMax = prompt("This is the last thing, give max when to slice :)");
    const arr = [];
    arr.push(Number(numSliceMin), Number(numSliceMax));
    document.getElementById("demo").innerHTML = str.slice(arr[0], arr[1]);
}
function oneLettUpThenDown() {
    let str = prompt("Please give a string for this presentation :)");
    let strToArr = str.split("");
    for (let i = 0; i < strToArr.length; ++i) {
        strToArr[i] = strToArr[i].toUpperCase();
        i++;
    }
    let arrToStr = strToArr.join("");
    document.getElementById("demo").innerHTML = arrToStr;
}
function numRound() {
    let num = prompt("My lord/Lady, please give a number");
    let numAfterComma = prompt("One more thing, please give a number after the comma");
    const arr = [];
    arr.push(Number(num), Number(numAfterComma));
    let result = arr.join(".");
    document.getElementById("demo").innerHTML = `Your number was ${Number(result)} and it rounded to ${Math.round(Number(result))}`;
}
function ceilNumRound() {
    let num = prompt("Please give a number");
    let numAfterComma = prompt("One more thing, please give a number after the comma");
    const arr = [];
    arr.push(Number(num), Number(numAfterComma));
    let result = arr.join(".");
    document.getElementById("demo").innerHTML = `Your number was ${Number(result)} and it rounded to ${Math.ceil(Number(result))}`;
}
function powerTheNum() {
    let num = prompt("Give a number to be powered!");
    let powNum = prompt("Give a number that powers the num!");
    document.getElementById("demo").innerHTML = `Your number was ${num} and the power was ${powNum} and using Math.pow it's: ${Math.pow(num, powNum)}`;
}
function absoluteNum() {
    let num = prompt("Please give a number to be absolute");
    document.getElementById("demo").innerHTML = `Your choice: ${Number(-num)}, after Math.abs: ${Math.abs(Number(-num))}`;
}
function changeString() {
    let exTxt = `Let's go to McDonald's. There's a lot of stuff at McDonald's`;
    let userChoice = prompt(`Please give a string\r"Let's go to McDonald's. There's a lot of stuff at McDonald's"`);
    let result = exTxt.replace(/McDonald's/g, `${userChoice}`);
    document.getElementById("demo").innerHTML = exTxt;
    document.getElementById("addDemo").innerHTML = result;
}
function popThings() {
    const arr = ["Car", "Dolphine", "Telephone", "Mango", "Grapefruit"];
    document.getElementById("demo").innerHTML = arr;
    document.getElementById("addDemo").innerHTML = arr.pop();
}
function trimExample() {
    let txt = prompt("String please!");
    document.getElementById("demo").innerHTML = `        ${txt}        `;
    document.getElementById("addDemo").innerHTML = txt.trim();
}