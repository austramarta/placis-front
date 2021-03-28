let inputTitle = document.getElementById("title");
let inputDescription = document.getElementById("description");
let inputCategory = document.getElementById("category");
// let addListingBtn = document.getElementById("add-listing");
let myListings = document.getElementById("my-listings");


function allEventListeners() {
    document.querySelector("form").addEventListener("submit", addListingToDB);
    document.querySelector("form").addEventListener("submit", addNewListing);
}
allEventListeners();


function addNewListing() {
    let newListing = document.createElement("li");
    newListing.className = "single-listing";

    let listingTitle = document.createElement("div");
    listingTitle.className = "listing-title";
    listingTitle.innerText = inputTitle.value;

    let listingDescription = document.createElement("div");
    listingDescription.className = "listing-description";
    listingDescription.innerText = inputDescription.value;

    let listingAvailable = document.createElement("div");
    listingAvailable.className = "listing-availability";
    listingAvailable.innerText = "1";

    let listingCategory = document.createElement("div");
    listingCategory.className = "listing-availability";
    listingCategory.innerText = inputCategory.value;

    newListing.appendChild(listingTitle);
    newListing.appendChild(listingDescription);
    newListing.appendChild(listingAvailable);
    newListing.appendChild(listingCategory);

    myListings.appendChild(newListing);

    // return newListing;
}

// API
function addListingToDB(e) {
    e.preventDefault();

    let title = inputTitle.value;
    let description = inputDescription.value;
    let available = "1";
    let category_id = inputCategory.value;

    fetch("http://localhost:8886/placis_api/api/items/create.php", {
        method: "POST",
        headers: {
            "Accept": "application/json",
            "Content-type": "application/json"
        },
        body: JSON.stringify({ title: title, description: description, available: available, category_id: category_id })
    })
        .then(response => response.json())
        .then(data => data)
        .catch(error => { throw (error) })
}
