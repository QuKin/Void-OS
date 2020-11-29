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
<?php
/*
 * User: QuKin;
 * Date: 2020/11/16;
 * Time: 19:52;
 */
header("Content-type:text/html;charset=utf-8");
$wb=$_POST['txt_wb'];
$bt='./text/'.$_POST['txt_bt'].'.txt';   // 要修改标题
$bt2='./text/'.$_POST['txt_bt2'].'.txt'; // 原来的
$lj=$_POST['lj'];
$xg=@$_POST['xg'];
$sc=@$_POST['sc'];
if (!empty($sc)){
    if (unlink($lj)){
        echo '删除成功，一秒后返回界面';
        header('refresh:1;url=./index.php');
    }else{
        echo '删除失败，一秒后返回界面';
        header('refresh:1;url=./index.php');
    }
}
if (!empty($xg)){
    if ($bt!=$bt2){
        rename($bt2,$bt);
        echo '修改成功，一秒后返回界面';
        header('refresh:1;url=./index.php');
    }

    unlink($lj);
    if ($bt!=''){
        $txt = file_put_contents($bt,$wb);
        if ($txt){
            echo '修改成功，一秒后返回界面';
            @file_get_contents($bt);
            header('refresh:1;url=./index.php');
        }else{
            echo '修改失败，一秒后返回界面';
            header('refresh:1;url=./index.php');
        }
    }else{
        echo '标题不能为空，一秒后返回界面';
        header('refresh:1;url=./index.php');
    }
}
?>