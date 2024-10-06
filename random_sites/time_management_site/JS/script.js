// Color variables declaration
// (with also an index used in switch case)
const colors = ["#e3ffeb", "#eee3ff", "#ffe3e3"];
let indexPriority = 0;

// Set colors at start for each priority
// Setting colors for an entire row, not only for the priority cell
document.querySelectorAll("#priority").forEach((e) => {
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

// When clicked on done button then change the style of the row
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
      row.querySelectorAll('#priority').forEach((e) => {
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
      });
      row.style.backgroundColor = colors[indexPriority];
    } else {
      row.style.textDecoration = "line-through";
      row.style.backgroundColor = "lightgrey";
    }
    table.appendChild(row);
  });
});

// Roll out more options button
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

// In modify subsite, button for backing up to main page
document.querySelector(".back").addEventListener("click", function (event) {
  // Prevent the default action of the button
  event.preventDefault();

  // Go back to the previous page
  window.history.back();
});
