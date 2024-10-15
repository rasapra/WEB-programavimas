document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    // Šiuo atveju, jeigu naudojate `action` formoje, nebūtina, jei siuntimas vyks į serverį.
    // event.preventDefault();
    alert("Dėkoju už Tavo žinutę!");
  });
