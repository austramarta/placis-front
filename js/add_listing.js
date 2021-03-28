let inputTitle = document.getElementById("title");
let inputDescription = document.getElementById("description");
let inputImage = document.getElementById("image");
let addListingBtn = document.getElementById("add-listing");
let myListings = document.getElementById("listings");


function allEventListeners() {
    addListingBtn.addEventListener("click", addNewListing);
}
allEventListeners();



function addNewListing(cleanInputField = false) {
    let inputTitleValue = inputTitle.value;
    let inputDescriptionValue = inputTitle.value;

    let newListing = document.createElement("li");
    newListing.className = "single-listing";

    let listingTitle = document.createElement("div");
    listingTitle.className = "listing-title";
    listingTitle.innerText = inputTitleValue

    let listingDescription = document.createElement("div");
    listingDescription.className = "listing-description";
    listingDescription.innerText = inputDescriptionValue;


    newListing.appendChild(listingTitle);
    newListing.appendChild(listingDescription);

    myListings.appendChild(newListing);

}


// API
function addListingToDB(e) {
    e.preventDefault();

    let title = inputTitle.value;
    let description = inputTitle.value;
    let available = "1";

    fetch("http://localhost:8886/placis_api/api/items/create.php", {
        method: "POST",
        headers: {
            "Accept": "application/json",
            "Content-type": "application/json"
        },
        body: JSON.stringify({ name: title, description: description, available: available })
    })
        .then(response => response.json())
        .then(data => console.log(data, true))
        .catch(error => { throw (error) })
}

// function addListingToDB(e) {
//     e.preventDefault();

//     let title = taskInputField.value;
//     const completed = "0";

//     fetch("http://localhost:8886/todo_list/api/todo_item/create.php", {
//         method: "POST",
//         headers: {
//             "Accept": "application/json",
//             "Content-type": "application/json"
//         },
//         body: JSON.stringify({ name: title, completed: completed })
//     })
//         .then(response => response.json())
//         .then(data => addNewTask(data, true))
//         .catch(error => { throw (error) })
// }
