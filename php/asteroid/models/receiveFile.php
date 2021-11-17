<?php

class ReceiveFile {

    public function receiveFile($receivedFile) {

        $target_dir = "./../files/";

        if(!isset ($receivedFile["name"])){

            echo "No file selected";

        }else{

            $target_file = $target_dir . basename($receivedFile["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            // Check if image file is a actual image or fake image
            if(!isset($_POST["submit"])) {
                    $check = getimagesize($receivedFile["tmp_name"]);
                    if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".<br>";
                } else {
                    echo "File is not an image.<br>";
                }
            }
            
            // Check file size
            if ($receivedFile["size"] > 5000000000) {
                echo "Sorry, your file is too large.<br>";
            }
            
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            }
            
            // if everything is ok, try to upload file
            move_uploaded_file($receivedFile["tmp_name"], $target_file);

        }

    }

}