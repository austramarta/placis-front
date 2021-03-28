<?php
if (isset($_POST["submit"])) {
    $file = $_FILES["file"];
    $file_name = $_FILES["file"]["name"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_error = $_FILES["file"]["error"];
    $file_type = $_FILES["file"]["type"];

    $file_ext = explode(".", $file_name);
    $file_actual_ext = strtolower(end($file_ext));

    $allowed = array("jpg", "jpeg", "png");

    if (in_array($file_actual_ext, $allowed)) {
        if ($file_error === 0) {
            if ($file_size < 500000) {
                $file_name_new = uniqid('', true) . "." . $file_actual_ext;
                $file_destination = "uploads/" . $file_name_new;
                move_uploaded_file($file_tmp_name, $file_destination);
                // header("add_listing.php?uploadsuccess");
            } else {
                echo "File size is too large";
            }
        } else {
            echo "An error has occured while uploading the file";
        }
    } else {
        echo "Please upload either jpg or png file format";
    }
}
