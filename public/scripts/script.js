console.log('JS OK');



// close alert message
const alert = document.getElementById('alert');
const closeAlert = document.getElementById('close-alert');
// search input filter on seach page
const inputSearch = document.getElementById('search');
const searchButton = document.getElementById('searchButton');
const cardTitiles = document.querySelectorAll('main .card h5');
const mainCards = document.querySelectorAll('main .col-12');
// Add Your own Camp
const AddCampButton = document.getElementById('submit-camp');
const AddCampTarget = document.getElementById('camps-row');
//Add Your own Camps input values
const campName = document.getElementById('camp-name');
const campPrice = document.getElementById('camp-price');
const campImageLink = document.getElementById('camp-image');
const campDesc = document.getElementById('camp-desc');

// close alert message
closeAlert.addEventListener('click', function(){
    alert.classList.add('d-none');
})

// search input filter on seach page
searchButton.addEventListener('click', function(){
    const userSearch = inputSearch.value.toLowerCase();
    for(let i = 0; i < cardTitiles.length; i++){
        if(!cardTitiles[i].innerText.toLowerCase().includes(userSearch)){
            mainCards[i].classList.add('d-none');
        } else {
            mainCards[i].classList.remove('d-none');
        }
    }
})

// Add Your own Camp

AddCampButton.addEventListener('click', function(){
    const userCampName = campName.value;
    const userCampPrice = campPrice.value;
    const userCampImageLink = campImageLink.value;
    const userCampDesc = campDesc.value;

    AddCampTarget.innerHTML = `
    <div class="col-12 col-md-6 col-lg-4 pb-4">
        <div class="card p-4">
            <img class="rounded mb-4" src="${userCampImageLink}">
            <h5>${userCampName}</h5>
            <p>${userCampDesc}</p>
            <div>${userCampPrice}</div>
        </div>
    </div>
    `;
});