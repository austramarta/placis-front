let allListings = document.getElementById("all-listings");

function createListings(title, body, available) {

    let newListing = document.createElement("li");
    newListing.className = "single-listing";

    let listingTitle = document.createElement("div");
    listingTitle.className = "listing-title";
    listingTitle.innerText = title

    let listingDescription = document.createElement("div");
    listingDescription.className = "listing-description";
    listingDescription.innerText = body;

    let listingAvailable = document.createElement("div");
    listingAvailable.className = "listing-availability";
    listingAvailable.innerText = available;


    newListing.appendChild(listingTitle);
    newListing.appendChild(listingDescription);
    newListing.appendChild(listingAvailable);

    allListings.appendChild(newListing);
}

function fetchAPIData() {
    fetch("http://localhost:8886/placis_api/api/items/read.php", {
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }

    })
        .then(response => response.json())
        .then(data => {

            data.forEach(listingItem => {
                createListings(listingItem.title, listingItem.body, listingItem.available);
                // if (listingItem.available) {
                // }
            })
        })
}

fetchAPIData();

