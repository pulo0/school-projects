// Variable declaration
const paragraph = document.getElementById("par");
const selectType = document.getElementById("types");
const selectTypeMore = document.getElementById("more-types");
const size = document.getElementById("percent");
const style = document.getElementById("new-style");

function buttonPress(color) {
  //For font size and changing it
  if (size.value === "") {
    paragraph.style.fontSize = "100%";
  } else {
    paragraph.style.fontSize = `${size.value}%`;
  }

  // For font style and boldness
  if (selectType.value === "bold") {
    paragraph.style.fontWeight = "bold";
    paragraph.style.fontStyle = "normal";
  } else {
    paragraph.style.fontStyle = selectType.value;
    paragraph.style.fontWeight = "normal";
  }

  // For additional styling
  const moreStyles = {
    "word-spacing": "1px",
    "text-align": "center",
    "border": "1px solid black",
    "font-family": "Arial",
    "background-color": "pink",
  };
  for (let i = 0; i < selectTypeMore.options.length; i++) {
    const selectedStyle = selectTypeMore.options[i].value;
    const isSelected = selectTypeMore.options[i].selected;
    if (isSelected) {
      paragraph.style[selectedStyle] = moreStyles[selectedStyle];
    }
  }

  // For color changing
  paragraph.style.color = color;

  // For entire style adding changes
  if (style.value.trim() !== "") {
    paragraph.style.cssText += `${style.value}`;
  }
}
