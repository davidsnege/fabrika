<?php
require_once '../models/receiveFile.php';

if (ISSET($_FILES["fileToUpload"]["name"])) {

    $received = new ReceiveFile($_FILES["fileToUpload"]);
    $result = $received->receiveFile($_FILES["fileToUpload"]);

}



