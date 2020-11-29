<?php
/*
 * User: QuKin;
 * Date: 2020/11/27;
 * Time: 13:03;
 */
header("Content-type:text/html;charset=utf-8");
$del='./img/'.$_GET['del'];
$status=unlink($del);
if($status){
    echo "删除成功";
    header('refresh:2;url=./index.php');
}else{
    echo "删除失败!";
    header('refresh:2;url=./index.php');
}

?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
