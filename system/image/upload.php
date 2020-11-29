<?php
/*
 * User: QuKin;
 * Date: 2020/11/5;
 * Time: 9:34;
 */
header("Content-type:text/html;charset=utf-8");
$dir = __DIR__.'\\img';
if (!is_dir($dir)){
    mkdir($dir,0777,true);
}
$file_Type = strrchr($_FILES['image']['name'],'.');
$file_Name = date(d_m_Y_).rand(10000,99999).$file_Type;
echo $dir;
move_uploaded_file($_FILES['image']['tmp_name'],$dir.'/'.$file_Name);
header('refresh:0;url=./index.php');
?>