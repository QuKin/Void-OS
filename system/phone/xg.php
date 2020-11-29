<?php
/*
 * User: QuKin;
 * Date: 2020/11/3;
 * Time: 18:48;
 */
include '../../php/mysql.class.php';
header("Content-type:text/html;charset=utf-8");
$username=$_POST['username'];
$tel=$_POST['tel'];
$sql_up = 'update tel set tel="'.$tel.'" where username="'.$username.'"';
$sql_xj = "insert into tel(username,tel) values('".$username."','".$tel."')";
$sql_cx = "select * from tel where username='".$username."'";
if ($username==''){
    echo '<script>alert("用户名不能为空，如果你想删除，就把电话号码一栏删掉")</script>';
    header('refresh:0;url=./index.php');
    exit();
}
if ($tel==''){
    # 自增排序
    $sql_a='SET @i=0;';
    $sql_b='UPDATE `tel` SET `id`=(@i:=@i+1);';
    $sql_c='ALTER TABLE `tel` AUTO_INCREMENT=0;';

    $sql_del = 'delete from tel where username="'.$username.'"';
    $res = mysqli_query($link,$sql_del);
    $a = mysqli_query($link,$sql_a);
    $b = mysqli_query($link,$sql_b);
    $c = mysqli_query($link,$sql_c);
    header('refresh:0;url=./index.php');
    exit();
}
if ($username!='' && $tel!=''){
    $res=mysqli_query($link,$sql_cx);
    if (mysqli_num_rows($res)){
        mysqli_query($link,$sql_up);
        header('refresh:0;url=./index.php');
    }else{
        mysqli_query($link,$sql_xj);
        header('refresh:0;url=./index.php');
    }
}
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
