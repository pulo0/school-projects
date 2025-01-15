function changePictureRightArrow() {
  const image = document.getElementById("image-switcher");
  let sourceImage = image.attributes[0].textContent;
  let changedSourceContent = sourceImage.substring(6, 7);
  let parsedSource = parseInt(changedSourceContent);
  if (changedSourceContent == 7) {
    image.attributes[0].textContent = "pliki/1.jpg";
  } else {
    parsedSource++;
    image.attributes[0].textContent = `pliki/${parsedSource}.jpg`;
  }
}

function changePictureLeftArrow() {
  const image = document.getElementById("image-switcher");
  let sourceImage = image.attributes[0].textContent;
  let changedSourceContent = sourceImage.substring(6, 7);
  let parsedSource = parseInt(changedSourceContent);
  if (changedSourceContent == 1) {
    image.attributes[0].textContent = "pliki/7.jpg";
  } else {
    parsedSource--;
    image.attributes[0].textContent = `pliki/${parsedSource}.jpg`;
  }
}
