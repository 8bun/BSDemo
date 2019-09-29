<?php

    error_reporting(0);
    $document_root = rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']), '/');

    include_once($document_root . "/PhpStormProject/BSExample/dao/LoginDao.php");


    echo (new LoginDao())->findUserByNameAndPwd($_GET["username"],$_GET["password"]);

