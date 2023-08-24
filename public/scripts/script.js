console.log("JS OK");

// close alert message
const alert = document.getElementById("alert");
const closeAlert = document.getElementById("close-alert");
// search input filter on seach page
const inputSearch = document.getElementById("search");
const searchButton = document.getElementById("searchButton");
const cardTitiles = document.querySelectorAll("main .card h5");
const mainCards = document.querySelectorAll("main .col-12");
// close alert message
closeAlert.addEventListener("click", function () {
    alert.classList.add("d-none");
});

// search input filter on seach page
searchButton.addEventListener("click", function () {
    const userSearch = inputSearch.value.toLowerCase();
    for (let i = 0; i < cardTitiles.length; i++) {
        if (!cardTitiles[i].innerText.toLowerCase().includes(userSearch)) {
            mainCards[i].classList.add("d-none");
        } else {
            mainCards[i].classList.remove("d-none");
        }
    }
});
