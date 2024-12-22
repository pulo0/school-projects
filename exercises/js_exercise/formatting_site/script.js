function randomizeNum(exponent) { 
  return Math.floor(Math.random() * exponent);
}

function changeStyle() {
  let paragraph = document.getElementById("par");
  const alignment = ["left", "right", "center", "justify"];
  const decoration = [
    "dashed",
    "dotted",
    "double",
    "line-through",
    "none",
    "overline",
    "solid",
    "underline",
    "wavy",
  ];
  const transform = [
    "capitalize",
    "uppercase",
    "lowercase",
    "full-width",
    "full-size-kana",
    "math-auto",
  ];
  const family = [
    "Georgia",
    "Arial",
    "serif",
    "sans-serif",
    "cursive",
    "system-ui",
  ];
  const style = ["normal", "italic", "oblique"];
  const maxPx = 10;
  const size = 50;
  let randomColors = [];
  for (let i = 0; i < 3; i++) {
    let rand = Math.floor(Math.random() * 255);
    randomColors.push(rand);
  }

  paragraph.style.color = `rgb(${randomColors[0]}, ${randomColors[1]}, ${randomColors[2]})`;
  paragraph.style.textAlign = `${
    alignment[randomizeNum(alignment.length)]
  }`;
  paragraph.style.textDecoration = `${
    decoration[randomizeNum(decoration.length)]
  }`;
  paragraph.style.textTransform = `${
    transform[randomizeNum(transform.length)]
  }`;
  paragraph.style.letterSpacing = `${randomizeNum(maxPx)}px`;
  paragraph.style.wordSpacing = `${randomizeNum(maxPx)}px`;
  paragraph.style.fontStyle = `${
    style[randomizeNum(style.length)]
  }`;
  paragraph.style.fontSize = `${randomColors(size)}px`;
  paragraph.style.fontFamily = `${randomizeNum(family.length)}`;
}

