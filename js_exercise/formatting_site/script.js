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
  const size = 50;
  let randomColors = [];
  for (let i = 0; i < 3; i++) {
    let rand = Math.floor(Math.random() * 255);
    randomColors.push(rand);
  }

  paragraph.style.color = `rgb(${randomColors[0]}, ${randomColors[1]}, ${randomColors[2]})`;
  paragraph.style.textAlign = `${
    alignment[Math.floor(Math.random() * alignment.length)]
  }`;
  paragraph.style.textDecoration = `${
    decoration[Math.floor(Math.random() * decoration.length)]
  }`;
  paragraph.style.textTransform = `${
    transform[Math.floor(Math.random() * transform.length)]
  }`;
  paragraph.style.letterSpacing = `${Math.floor(Math.random() * 10)}px`;
  paragraph.style.wordSpacing = `${Math.floor(Math.random() * 10)}px`;
  paragraph.style.fontStyle = `${
    style[Math.floor(Math.random() * style.length)]
  }`;
  paragraph.style.fontSize = `${Math.floor(Math.random() * size)}px`;
  paragraph.style.fontFamily = `${Math.floor(Math.random() * family.length)}`;
}
