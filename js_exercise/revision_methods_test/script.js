// Kartkówka - Javascript metody

// Pytania:
// 1. pobrać z prompta tekst, z dwóch radioboxów wybrać co ma funkcja zrobić wyświetlić pierwszą czy ostatnia literę
// 2. pobrać z inputa tekst, z dwóch checkboxów wybrać czy ma zamienić Aa na @ czy eE ma &
// 3. pobrać jakkolwiek tekst, zamienić przedostatni znak z ostatnim
// 4. stworzyć selecta z 4 opcjami, stworzyć tabelę z trzema rekordami, i co wybierzesz w select'cie ma się dodać na początku tabeli
// 5. utworzyć tabele z liczbami i posortować malejąco
// 6. losowanie liczb z zakresu <10,100)
// 7. pobrać tekst i policzyć ile "i" się w nim znajduje
// 8. zamienić pierwszą literę/rekord w tabeli z ostatnią
// 9. string na array zamiana
// 10. naprzemiennie uppercase i lowercase

let par = document.getElementById("par");
let arr = new Array();

function ex1() {
  let radios = document.getElementsByName("fun");
  let pr = prompt("Podaj liczbę");

  if (radios[0].checked) {
    par.innerHTML = pr.split("")[pr.length - 1];
  } else {
    par.innerHTML = pr.split("")[0];
  }
}

function ex2() {
  const regA = new RegExp("[aA]", "g");
  const regE = new RegExp("[eE]", "g");

  const chckA = document.getElementById("a");
  const chckE = document.getElementById("e");
  const txt = document.getElementById("txt").value;
  let result = txt;

  if (chckA.checked) {
    result = result.replace(regA, "@");
  }

  if (chckE.checked) {
    result = result.replace(regE, "#");
  }

  par.innerHTML = result;
}

function ex3() {
  let txt = document.getElementById("text").value;

  txt = txt.split("");

  let temp = txt[0];
  txt[0] = txt[txt.length - 1];
  txt[txt.length - 1] = temp;

  par.innerHTML = txt.join("");
}

function ex4() {
  let items = document.getElementById("items");
  let valueItems = items.value;
  console.log(valueItems);

  arr.push(valueItems);

  par.innerHTML = arr;
}

function ex5() {
  let numArr = [1, 32, 43, 54, 76, 34, 4314, 54, 54, 77, 123, 545, 9];
  let sortedArr = numArr.sort((a, b) => a - b);

  par.innerHTML = sortedArr;
}

function ex6() {
  let randNum = Math.floor(Math.random() * (99 - 10)) + 10;
  par.innerHTML = randNum;
}

function ex7() {
  let i = document.getElementById("i").value;
  let result = i.match(/i/g);

  console.log(result);

  par.innerHTML = result == null ? 0 : result.length;
}

function ex8() {
  let arr = ["maiu", "hau", "ciw"];

  let temp = arr[0];
  arr[0] = arr[arr.length - 1];
  arr[arr.length - 1] = temp;

  par.innerHTML = arr;
}

function ex9() {
  let pr = prompt("Press");

  par.innerHTML = pr.split("");
}

function ex10() {
  let pr = prompt("Press it");
  let arr = pr.toLowerCase().split("");

  for (let i = 0; i < pr.length; i += 2) {
    arr[i] = arr[i].toUpperCase();
  }

  par.innerHTML = arr.join("");
}
