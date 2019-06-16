<?php
echo uploadImage();

function uploadImage() {
    $msg = "";
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES['file']["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES['file']["tmp_name"]);
        if($check !== false) {
            $msg = $msg."File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $msg = $msg."File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    // if (file_exists($target_file)) {
    //     $msg = $msg." Sorry, file already exists.";
    //     $uploadOk = 0;
    // }
    // Check file size
    if ($_FILES['file']["size"] > 500000) {
        $msg = $msg." Sorry, your file is too large.";
        $uploadOk = 0;
    }
    /* Valid Extensions */
    $valid_extensions = array("jpg","jpeg","png","gif");

    /* Check file extension */
    if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
        $msg = $msg." Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        $msg = $msg." Sorry, your file was not uploaded.";
        return $msg;
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES['file']["tmp_name"], $target_file)) {
            $msg =  "The file ". basename( $_FILES['file']["name"]). " has been uploaded.";
            $url = $target_file;
        } else {
            $msg =  "Sorry, there was an error uploading your file.";
            $url = "";
        }
        return json_encode(["message"=> $msg, "url"=> $url]);
    }
}
?>
