<?php
    error_reporting(0);
    $document_root = rtrim(str_replace('\\','/', $_SERVER['DOCUMENT_ROOT']), '/');

    include_once($document_root."/PhpStormProject/BSExample/dao/RegistDao.php");

    echo (new RegistDao())->findUserByName($_GET["username"],$_GET["password"]);


