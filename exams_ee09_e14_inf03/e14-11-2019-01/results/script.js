function ImageClick(src, alt) {
  let img = document.querySelector(`img[alt="${src}"]`);
  let bottomImg = document.querySelector(`img[alt="${alt}-duzy"]`);
  img.src = `materialy5-6/${src}.jpg`;
  bottomImg.src = `materialy5-6/${src}.jpg`;
}

function ImageHover(src) {
  let img = document.querySelector(`img[alt="${src}"]`);
  img.src = `materialy5-6/${src}-szary.jpg`;
}

function ImageRelease(src) {
  let img = document.querySelector(`img[alt="${src}"]`);
  img.src = `materialy5-6/${src}.jpg`;
}
