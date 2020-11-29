<?php
include '../../php/mysql.class.php';

$sql_tel = 'select * from tel';                       # sql查询语句
$res = mysqli_query($link,$sql_tel);
$array_name=array();                                 # 创建数组
$array_tel=array();
while($row=mysqli_fetch_assoc($res)){
    $array_name[] = $row['username'];
    $array_tel[] = $row['tel'];
}
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>电话</title>
    <link rel="stylesheet" href="./index.css">
    <link rel="icon" href="../../favicon.ico">
    <script src="/js/jquery.js"></script>
    <script src="./index.js"></script>
</head>
<body>
<img src="/bg.jpg" alt="" id="bj">
    <header class="fix">
        <p id="head_p">联系人</p>
    </header>
    <main class="abs">
        <form action="">
            <div id="search" class="abs"><img src="./search.png" alt=""></div>
            <input style="padding-left: 40px;width: 85%;" type="text" placeholder="搜索联系人">
        </form>
        <ul id="main_ul"><?php foreach ($array_name as $key=>$count){ $aaa=mb_substr($count,-1,1,"UTF-8");?><li class="tel_li"><?php echo "<div id='tel{$key}'><div class='name'><p>{$aaa}</p></div><p>{$count}</p><span>$array_tel[$key]</span></div>"; ?></li> <?php } ?></ul>
        <div id="add" class="fix"><p>+</p></div>
    </main>
    <footer class="fix">
        <nav>
            <ul>
                <a href="#">
                    <li id="foot_li1" class="foot_li">
                        <img src="./联系人_个人中心.png" alt="">
                        <p>联系人</p>
                    </li>
                </a>
            </ul>
        </nav>
    </footer>
    <div id="tc" class="fix">
        <form action="xg.php" method="post" id="tc_form">
            <p class="tc_p1">联系人</p>
            <input type="text" id="tc_lxr" class="tc_p2" name="username">
            <p class="tc_p1">电话号码</p>
            <input type="text" id="tc_tel" class="tc_p2" name="tel">
            <input type="submit" value="提交" id="tc_xg">
        </form>
    </div>
    <div id="qx" class="fix">
        <!-- 点击这一块区域会放下弹窗 -->
    </div>
</body>
</html>