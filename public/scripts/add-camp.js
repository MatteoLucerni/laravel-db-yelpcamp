// Add Your own Camp
const AddCampButton = document.getElementById("submit-camp");
const AddCampTarget = document.getElementById("camps-row");
//Add Your own Camps input values
const campName = document.getElementById("camp-name");
const campPrice = document.getElementById("camp-price");
const campImageLink = document.getElementById("camp-image");
const campDesc = document.getElementById("camp-desc");

// Add Your own Camp Logic

AddCampButton.addEventListener("click", function () {
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
