document
  .getElementById("contact-form")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const feedbackValue = document.getElementById("feedback").value;
    console.log(feedbackValue);

    alert("Dėkoju už atsiliepimą!");
  });
