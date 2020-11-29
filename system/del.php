<?php
/*
 * User: QuKin;
 * Date: 2020/11/18;
 * Time: 9:34;
 */
header("Content-type:text/html;charset=utf-8");
$num=$_GET['del']+1;
//for ($i=0;$i<=$del;$i++){
//    delLastLine('app.ini');
//}
//header('refresh:3;url=./main.php');
//function delLastLine($file_path){
//    $file = $fp = fopen($file_path, 'r') or die("Unable to open file!");
//    while(!feof($file)){
//        $fp = fgets($file);
//        if($fp){
//            $content[] = $fp;
//        }
//    }
//    array_pop($content);
//    fclose($file);
//
//    //重新写入文件
//    $file = fopen($file_path, 'w+');
//    fwrite($file, implode("", $content));
//    fclose($file);
//}
//$num=2;
//要删除的行序号
//echo $num;
//$fp=file("app.ini");
//$total=count($fp);
////取得文件总行数
//foreach ($fp as $line) {
////按行分解内容并
//    $tmp[]=$line;
////逐行写入数组
//}
//for($i=0;$i<$total;$i++){
////若$i的值不等于要删除的行序号
//    if($i!=$num){
//        $savestr.=$tmp[$i];
//    }
//}
////写入文件
//$fp=fopen("app.ini","w");
//fwrite($fp,$savestr);
//fclose($fp);
//header('refresh:3;url=./main.php');

$intNum = intval(file_get_contents('app_down.txt'));
file_put_contents('app_down.txt', strval($intNum - 1));

$filename="app.ini";//定义操作文件
$delline=$num; //要删除的行数
$farray=file($filename);//读取文件数据到数组中
for($i=0;$i<count($farray);$i++)
{
    if(strcmp($i+1,$delline)==0)  //判断删除的行,strcmp是比较两个数大小的函数
    {
        continue;
    }
    if(trim($farray[$i])<>"")  //删除文件中的所有空行
    {
        @$newfp.=$farray[$i];    //重新整理后的数据
    }
}
$fp=@fopen($filename,"w");//以写的方式打开文件
@fputs($fp,$newfp);
@fclose($fp);
header('refresh:0;url=./main.php');
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>自动卸载</title>
</head>
<body>

</body>
</html>
