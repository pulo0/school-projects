function beeImageEffect() {
  const radios = document.getElementsByName("filters");
  const beeImage = document.getElementById("pszczola");

  let randomBlur = Math.round(Math.random() * (8 - 4)) + 4;

  const effectsMap = {
    blur: `blur(${randomBlur}px)`,
    sepia: "sepia(100%)",
    colorInversion: "invert(100%)",
  };

  if (radios[0].checked) {
    beeImage.style.filter = effectsMap.blur;
  } else if (radios[1].checked) {
    beeImage.style.filter = effectsMap.sepia;
  } else if (radios[2].checked) {
    beeImage.style.filter = effectsMap.colorInversion;
  }
}

function orangeBlackWhiteEffect() {
  const orangeImage = document.getElementById("pomarancza");

  orangeImage.style.filter = "grayscale(100%)";
}

function orangeColorEffect() {
  const orangeImage = document.getElementById("pomarancza");

  orangeImage.style.filter = "none";
}

function fruitsImageEffect() {
  const rangeScale = document.getElementById("range-fruits");
  const fruitImage = document.getElementById("owoce");

  fruitImage.style.filter = `opacity(${rangeScale.value}%)`;
}

function turtleImageEffect() {
  const rangeScale = document.getElementById("range-turtle");
  const turtleImage = document.getElementById("zolw");

  turtleImage.style.filter = `brightness(${rangeScale.value}%)`;
}
