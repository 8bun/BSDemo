<?php

error_reporting(0);
$document_root = rtrim(str_replace('\\','/', $_SERVER['DOCUMENT_ROOT']), '/');

include_once($document_root."/PhpStormProject/BSExample/utils/DBUtils.php");

class LoginDao
{
    public function findUserByNameAndPwd($username,$password){
        header("content-type:text/html;charset=utf-8");

        $conn=DBUtils::getConnection();

        $sql="SELECT * FROM USER WHERE USERNAME='".$username."'"."AND PASSWORD='".$password."'";
        $result=$conn->query($sql);

        DBUtils::close($conn);
        if ($result->num_rows > 0) {
            echo "true";
            return;
        }
        echo "false";
    }
}