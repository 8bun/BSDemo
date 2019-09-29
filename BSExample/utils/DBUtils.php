<?php


class DBUtils
{
    public static function getConnection(){
        $servername="localhost:3306";
        $user="root";
        $pwd="13202441556";
        $dbname = "bs_test";
        // 创建连接
        try {
            $conn = mysqli_connect($servername, $user, $pwd);
            // 检测连接
            if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
            }
            // 设置编码，防止中文乱码
            mysqli_query($conn, "set names utf8");
            mysqli_select_db($conn, $dbname);
        }catch (Exception $e){
            throw new RuntimeException($e);
        }
        return $conn;
    }
    public static function close($conn){
        try {
            mysqli_close($conn);
        }catch (Exception $e){
            throw new RuntimeException($e);
        }
    }
}