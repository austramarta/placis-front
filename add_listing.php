<?php
include_once 'header.php';
?>

<body>
    <h1>
        THIS IS WHERE LISTINGS WILL BE ADDED
    </h1>

    <form action="">
        <label for="title">Title</label>
        <input type="text" id="title" name="title"><br>
        <label for="description">Description</label>
        <input type="text" id="description" name="description"><br>
        <label for="category">Category id</label>
        <input type="text" id="category" name="category"><br>
        <!-- <label for="image">image</label>
        <input type="text" id="location" name="location"><br><br>
        <label for="location">location</label>
        <input type="text" id="location" name="location"><br><br> -->

        <input id="add-listing" type="submit" value="submit">
    </form>
    <div>
        <ul id="my-listings">
            <li>Hello</li>
        </ul>
    </div>

    <script src="js/add_listing.js"></script>
</body>