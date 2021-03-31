<?php
include_once 'header.php';
?>
<div class="main">

    <body>
        <h1>
            add new listing
        </h1>

        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" id="title" name="title" placeholder="Title"><br>
            <input type="text" id="description" name="description" placeholder="Description"><br>
            <input type="text" id="category" name="category" placeholder="Category"><br>
            <input type="file" id="file" name="file" placeholder="Image upload"><br><br>

            <button id="add-listing" type="submit" value="submit">Add</button>
        </form>
        <div>
            <ul id="my-listings">
                <li>Hello</li>
            </ul>
        </div>
        <script src="https://kit.fontawesome.com/76ec96adb3.js" crossorigin="anonymous"></script>
        <script src="js/add_listing.js"></script>

    </body>
</div>