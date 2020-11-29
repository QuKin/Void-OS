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
 * Time: 15:21;
 */
header("Content-type:text/html;charset=utf-8");
$bt='./text/'.$_POST['bt'].'.txt';
if (!file_exists($bt) && $bt!=''){
    $wb=$_POST['wb'];
    $txt = file_put_contents($bt,$wb);
    if ($txt){
        echo '写入成功，一秒后返回界面';
        file_get_contents($bt);
        header('refresh:1;url=./index.php');
    }else{
        echo '写入失败，一秒后返回界面';
        header('refresh:1;url=./index.php');
    }
}else{
    echo '标题重复，一秒后返回界面';
    header('refresh:1;url=./index.php');
}
?>