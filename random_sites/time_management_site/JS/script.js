const colors = ["#e3ffeb", "#eee3ff", "#ffe3e3"];
let indexPriority = 0;

let priorityColor = document.querySelectorAll("#priority").forEach((e) => {
  const row = e.closest("tr");
  switch (e.innerHTML) {
    case "niski":
      indexPriority = 0;
      break;
    case "sredni":
      indexPriority = 1;
      break;
    default:
      indexPriority = 2;
      break;
  }
  row.style.backgroundColor = colors[indexPriority];
});
console.log(priorityColor);

document.querySelectorAll(".done").forEach((button) => {
  button.addEventListener("click", function (event) {
    // Prevent the default action of the button
    event.preventDefault();

    // Defining variables
    const row = this.closest("tr");
    const table = row.closest("table");

    // Add line-through and grey background (indicating that the task is done)
    // If the task is already done, remove line-through and grey background
    if (row.style.textDecoration === "line-through") {
      row.style.textDecoration = "none";
      row.style.backgroundColor = colors[indexPriority];
    } else {
      row.style.textDecoration = "line-through";
      row.style.backgroundColor = "lightgrey";
    }
    table.appendChild(row);
  });
});

document.querySelectorAll(".more").forEach((button) => {
  button.addEventListener("click", function (event) {
    // Prevent the default action of the button
    event.preventDefault();

    // Change the text of the button depeneding on the current state
    button.innerHTML === "rozwiń"
      ? (button.innerHTML = "zwiń")
      : (button.innerHTML = "rozwiń");

    // Show or hide the details of the task
    // If the details are hidden, show them
    // If not hidden, hide them again
    const row = this.closest("tr");
    row.querySelectorAll(".details").forEach((detail) => {
      if (detail.style.display === "none") {
        detail.style.display = "table-cell";
      } else {
        detail.style.display = "none";
      }
    });
  });
});

document.querySelector(".back").addEventListener("click", function (event) {
  // Prevent the default action of the button
  event.preventDefault();

  // Go back to the previous page
  window.history.back();
});
