<?php
    error_reporting(0);
    $document_root = rtrim(str_replace('\\','/', $_SERVER['DOCUMENT_ROOT']), '/');

    include_once($document_root."/PhpStormProject/BSExample/utils/DBUtils.php");

class RegistDao{

    public function findUserByName($username,$password)
    {
        header("content-type:text/html;charset=utf-8");

        $conn=DBUtils::getConnection();

        $sql="SELECT * FROM USER WHERE USERNAME='".$username."'";
        $result=$conn->query($sql);

        if ($result->num_rows > 0) {
            echo "false";
            DBUtils::close($conn);
            return;
        }
        //插入
        $insert_sql="INSERT INTO USER(USERNAME,PASSWORD) VALUES('".$username."','".$password."')";

        if (mysqli_query($conn,$insert_sql)) {
            echo "true";
            DBUtils::close($conn);
            return;
        }else{
            print_r("Error:".mysqli_error($conn));
            DBUtils::close($conn);
            echo "false";   //false表示注册失败
        }
    }
}
