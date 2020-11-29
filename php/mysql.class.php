<?php
/*
 * User: QuKin;
 * Date: 2020/10/30;
 * Time: 13:08;
 */
header("Content-type:text/html;charset=utf-8");
class MySql{
    public $mysql = array(
        'host'=>'127.0.0.1',
        'user'=>'root',
        'pass'=>'root',
        'db'=>'webos'
    );
}
$mysql=new MySql();
$link = @mysqli_connect($mysql->mysql['host'],$mysql->mysql['user'],$mysql->mysql['pass'],$mysql->mysql['db']);

if (!$link){
    echo '数据库连接失败';
    exit();
}
mysqli_query($link,'set names uft8');

$sql_login = 'select * from login';                       # sql查询语句
$result = mysqli_query($link,$sql_login);
$array=array();                                     # 创建数组
while($row=mysqli_fetch_assoc($result)){            # 遍历数据库里面的值
    $array[$row['username']] = $row['password'];    # 全部获取并存入数组里
}
?>