<?php
/*
 * User: QuKin;
 * Date: 2020/10/30;
 * Time: 14:29;
 */
include_once './php/mysql.class.php';
header("Content-type:text/html;charset=utf-8");
$user=$_POST['username'];
$pass_one=md5($_POST['password']);
$pass_two=md5($_POST['password_two']);
if ($pass_one==$pass_two && $pass_one!='') {
    foreach ($array as $key => $mm) {                 # 遍历数组
        if ($user == $key) {             # 判断输入的值和数组进行判断
            echo '已有账号';
            header('refresh:2;url=./registered.html');
            exit();
        }
        $sql = "insert into login(username,password) values('$user','$pass_one')";
        $res = mysqli_query($link,$sql);
        if (!$res){
            echo '创建错误';
            header('refresh:2;url=./registered.php');
        }else{
            echo '创建成功';
            header('refresh:2;url=./index.php');
        }
    }
}
?>