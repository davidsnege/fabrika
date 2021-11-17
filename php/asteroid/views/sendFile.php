<?php
// Templates to Body
include_once '../templates/head.php';
echo $head;
include_once '../templates/body_init.php';
echo $body_init;
include_once '../templates/menu.php';
echo $menu;

// Central Content goes here
require_once("../controllers/receiveFile.php");
require_once("../templates/sendFile.php");
echo $sendFile;

// Other Footer content goes here
include_once '../templates/footer.php';
echo $footer;
include_once '../templates/logout_modal.php';
echo $logout_modal;
include_once '../templates/body_end.php';
echo $body_end;
