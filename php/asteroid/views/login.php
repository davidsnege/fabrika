<?php
// Templates to Body
include_once '../templates/head.php';
echo $head;
include_once '../templates/body_init.php';
echo $body_init;

// Central Content goes here
require_once("../templates/login.php");
echo $login;

// Other Footer content goes here
include_once '../templates/footer.php';
echo $footer;
include_once '../templates/logout_modal.php';
echo $logout_modal;
include_once '../templates/body_end.php';
echo $body_end;
