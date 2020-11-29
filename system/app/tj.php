<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>下载</title>
    <link rel="icon" href="../../favicon.ico">
</head>
<body>

</body>
</html>
<?php
/*
 * User: QuKin;
 * Date: 2020/11/17;
 * Time: 20:20;
 */
header("Content-type:text/html;charset=utf-8");
$intNum = intval(file_get_contents('../app_down.txt'));
if ($intNum<23){
    file_put_contents('../app_down.txt', strval($intNum + 1));
    $filename='../app.ini';
    $write = "\n".$_GET['wz']."^^^".$_GET['bt']."^^^".$_GET['logo'];
    $fh=fopen($filename,"a");
    echo fwrite($fh,$write);
    fclose($fh);
    header('refresh:0;url=./index.php');
}else{
    echo '为了保证你的流量够用，所以最多出现23个app';
    header('refresh:2;url=./index.php');
}
?>