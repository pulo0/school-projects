/*
    Making stuff functions    
*/

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

function oneLettUpThenDown() {
    let str = prompt("please do it :)");
    let strToArr = str.split("");
    for (let i = 0; i < strToArr.length; ++i) {
        strToArr[i] = strToArr[i].toUpperCase();
        i++;
    }
    let arrToStr = strToArr.join("");
    document.getElementById("demo").innerHTML = `Before activating UpAndDown: ${str}`;
    document.getElementById("addDemo").innerHTML = `After activating UpAndDown: ${arrToStr}`
}

function monkeyNotA() {
    let str = prompt("please write something");
    document.getElementById("demo").innerHTML = `duck u for doing the @ and a: ${str.replace(new RegExp(/[aA]/g), "@")}`;
}

function noSpaces() {
    let txt = prompt("Please enter ducking text!!");
    txt = txt.replace(/ /g, "").split(",").filter(String);
    document.getElementById("demo").innerHTML = txt;
}

function plusThree() {
    let txt = prompt("Add meow please!");
    let txtToArr = txt.split("");
    for(let i = 2; i < txt.length; i += 3) {
        txtToArr[i] = txtToArr[i].toUpperCase();
    }
    let arrToTxt = txtToArr.join("");
    document.getElementById("demo").innerHTML = arrToTxt;
}

/*
    Color change functions    
*/

function addRed() {
    document.getElementById("demo").style.color = "#ff0000";
    document.getElementById("addDemo").style.color = "#ff0000";
}
 function addGreen() {
    document.getElementById("demo").style.color = "#008000";
    document.getElementById("addDemo").style.color = "#008000";
}
 function addBlue() {
    document.getElementById("demo").style.color = "#6767fc";
    document.getElementById("addDemo").style.color = "#6767fc";
}
 function addMagenta() {
    document.getElementById("demo").style.color = "#ff00ff";
    document.getElementById("addDemo").style.color = "#ff00ff";
}

/*
    Adjusting text/font functions    
*/

function makeBolder() {
    document.getElementById("demo").style.fontWeight = "bolder";
    document.getElementById("addDemo").style.fontWeight = "bolder";
}

function makeLighter() {
    document.getElementById("demo").style.fontWeight = "lighter";
    document.getElementById("addDemo").style.fontWeight = "lighter";
}

 function makeBigger() {
    const decrease = 5;
    let txt = document.getElementById("demo");
    let secondTxt = document.getElementById("addDemo");
    let style = window.getComputedStyle(txt, null).getPropertyValue("font-size");
    let secondStyle = window.getComputedStyle(secondTxt, null).getPropertyValue("font-size");
    let nowSize = parseFloat(style);
    let seconddNowSize = parseFloat(secondStyle);
    txt.style.fontSize = (nowSize + decrease) + 'px';
    secondTxt.style.fontSize = (seconddNowSize + decrease) + 'px';
}

function makeSmaller() {
    const decrease = 5;
    let txt = document.getElementById("demo");
    let secondTxt = document.getElementById("addDemo");
    let style = window.getComputedStyle(txt, null).getPropertyValue("font-size");
    let secondStyle = window.getComputedStyle(secondTxt, null).getPropertyValue("font-size");
    let nowSize = parseFloat(style);
    let seconddNowSize = parseFloat(secondStyle);
    txt.style.fontSize = (nowSize - decrease) + 'px';
    secondTxt.style.fontSize = (seconddNowSize - decrease) + 'px';
}