<?php

    require_once '../models/Model.php';

    $connClass = new DataBaseCon();
    $callCon = $connClass->masterDB();

    $newClass = new DataBase();
    $call = $newClass->masterDBClass($callCon);

