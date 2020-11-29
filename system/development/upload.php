<?php
/*
 * User: QuKin;
 * Date: 2020/11/18;
 * Time: 13:48;
 */
header("Content-type:text/html;charset=utf-8");
@$file=$_FILES["file"]["name"];
@$bdtp=$_POST['wltp'];
$mc=$_POST['mc'];
$lj=$_POST['lj'];
if ($bdtp!=''){
    if ($mc!='' && $lj!=''){
        $intNum = intval(file_get_contents('../app_down.txt'));
        if ($intNum<23){
            file_put_contents('../app_down.txt', strval($intNum + 1));
            $filename='../app.ini';
            $write = "\n".$lj."^^^".$mc."^^^".$bdtp;
            $fh=fopen($filename,"a");
            echo fwrite($fh,$write);
            fclose($fh);
            header('refresh:0;url=./index.php');
        }else{
            echo '为了保证你的流量够用，所以最多出现23个app';
            header('refresh:2;url=./index.php');
        }
    }
}
if (!empty($file)){
    if ($mc!='' && $lj!=''){
        $dir = '../app_img';
        if (!is_dir($dir)){
            mkdir($dir,0777,true);
        }
        $file_Type = strrchr($file,'.');
        $file_Name = $mc.'_'.time().rand(999,9999).$file_Type;
        $dir=$dir.'/'.$file_Name;
        echo $dir;
        move_uploaded_file($_FILES["file"]["tmp_name"],$dir);

        $fileNum = intval(file_get_contents('../app_down.txt'));
        if ($fileNum<23){
            file_put_contents('../app_down.txt', strval($fileNum + 1));
            $filename='../app.ini';
            $write = "\n".$lj."^^^".$mc."^^^".substr($dir,1);
            $fh=fopen($filename,"a");
            echo fwrite($fh,$write);
            fclose($fh);
            header('refresh:0;url=./index.php');
        }else{
            echo '为了保证你的流量够用，所以最多出现23个app';
            header('refresh:2;url=./index.php');
        }
    }
}
//header('refresh:0;url=./index.php');
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
