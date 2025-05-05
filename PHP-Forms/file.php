<?php

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if ($_FILES['fileUpload']) {
    $path = $_FILES['fileUpload']['name'];
    // echo $path;
    $upload_path = "./uploads/" . $path;
    // echo $upload_path;

    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path)) {
        echo "file uploaded";
    } else {
        die("failed to upload file");
    }
} else {
    die("no file upload");
}
