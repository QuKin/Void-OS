<?php
date_default_timezone_set('Asia/Hong_Kong');
$txt=array('txt');
$dir = 'text/';
$pic = array();
foreach($txt as $k=>$v){
    $pattern = $dir.'*'.$v;
    $all = glob($pattern);
    $pic = array_merge($pic,$all);
}
?>
<!doctype html>
<html lang="zn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>备忘录</title>
    <link rel="icon" href="../../favicon.ico">
    <link rel="stylesheet" href="./style.css">
    <script src="/js/jquery.js"></script>
    <script src="index.js"></script>
</head>
<body>
<img src="/bg.jpg" alt="" id="bj">
<div id="qx" class="fix"></div>
    <header class="fix">
        <p id="head_p">备忘录</p>
    </header>
    <main>
        <nav>
            <ul id="main_ul">
                <?php foreach ($pic as $p){ ?>
                <li class="main_ul_li"><?php
                    echo '<p class="bt">'.substr($p,5,-4).'</p><p class="sj">'.date("m-d H:i",filemtime($p)).'</p><span class="dz">./'.$p.'</span><span class="size">'.filesize($p).' bytes</span>';
                    if (file_exists($p)){
                        $fc=fopen($p,'r');
                        $str=fread($fc,filesize($p));
                        echo '<span class="txt">'.$str.'</span>';
                    }
                    }
                    ?></li>
            </ul>
        </nav>
    </main>
    <form method="post" action="cj.php" id="cj" class="rel">
        <div id="fh"><-</div>
        <input name="bt" type="text" id="bt" placeholder="标题">
        <textarea name="wb" id="wb" placeholder="正文"></textarea>
        <input type="submit" id="bc" value="保存" class="fix">
    </form>
    <div id="tj" class="fix"><p>+</p></div>
    <footer class="fix">
        <form action="txt.php" method="post">
            <div id="foot_top">
                <input type="submit" name="xg" value="修改">
                <input type="submit" name="sc" value="删除" style="float: right;">
            </div>
            <div id="foot_p">
                <p id="foot_p_size"></p>
                <input type="text" id="foot_lj" name="lj" style="display: none;">
                <input type="text" name="txt_bt" id="foot_p_bt">
                <input type="text" name="txt_bt2" id="foot_p_bt2" style="display: none;">
                <textarea name="txt_wb" id="foot_p_wb"></textarea>
            </div>
        </form>
    </footer>
</body>
</html>