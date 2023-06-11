<?php

//请运行ksweb，在浏览器访问 http://localhost:8080/token.php 使用本页面！

$filename = isset($_REQUEST['filename'])? $_REQUEST['filename'] : 'token.json';
$token = isset($_REQUEST['token'])? $_REQUEST['token'] : '';
$test = str_replace("https://3dtank.com/play/?token=","",$token);
$test = str_replace("&sub_partner_id=partner4399","",$test);
$test = urldecode($test);
$data='{"errCode":0,"message":"ok","data":"'. $test .'","ticks":0}';
$flags = "FILE_USE_INCLUDE_PATH";

if(isset($_REQUEST['try'])&&$_REQUEST['try']==1&&is_file($filename)){
    json_decode(file_get_contents($filename), true)["data"];
    Header("Location: https://3dtank.com/play?token=".json_decode(file_get_contents($filename), true)["data"]);
}


?>
<!DOCTYPE html>
<html>
<head>
  <title>token</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.staticfile.org/twitter-bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>处理与安装token</h2>
<div class='mb-3' style='overflow: scroll;'>
<?php


if(isset($_REQUEST['filename'])&&isset($_REQUEST['token'])){
  file_put_contents($filename,$data);
}
if(is_file($filename)){
echo "<p>文件“".$filename."”内容：".file_get_contents($filename)."</p>";
}else{
echo "<p>文件“".$filename."”不存在</p>";
}


?>
</div>
	<form action="">
	  <div class="mb-3 mt-3">
		<label for="" class="form-label">Token:</label>
		<input type="text" class="form-control" id="token" placeholder="输入token链接" name="token">
	  </div>
	  <div class="mb-3">
		<label for="filename" class="form-label">文件名:</label>
		<input type="filename" class="form-control" id="filename" placeholder="输入文件名" name="filename" value="token.json">
	  </div>
	  <button type="submit" class="btn btn-primary">提交</button>
	</form>
	<div class="mb-3">
	    <p><a href="http://my.4399.com/yxtk/">4399登陆</a>，<a href="http://my.4399.com/yxtk/play?sid=1">4399token</a></p>
	    <p><a href="javascript: void(0)" onclick="window.open('?try=1&filename='+document.getElementById('filename').value,'_blank')">登陆尝试</a></p>
	</div>
	<div class="mb-3">
	    <div class="alert alert-primary">
    	    <strong>操作提示:</strong> 自动去除的部分：<code>https://3dtank.com/play/?token=</code>和<code>&sub_partner_id=partner4399</code>。如果不是4399渠道，可能sub_partner_id略有不同，请自行删去。<br>
    	    如果本工具无法写入文件，查看htdocs目录的<span data-bs-toggle="tooltip" title="写入权限">权限</span>并修改。<br>
    	    4399用户第一次使用请先4399登陆，再点击4399token，复制链接，在本页面粘贴。<a href="https://www.bilibili.com/video/BV1fh4y1G73N/">[视频教程]</a>
        </div>
	    <div class="alert alert-secondary">
            <strong>次要信息:</strong> <small>本文件使用PHP代码自动去除token中的多余部分并解码url，并在htdocs目录里自动创建/更新token.json文件。<br>
	        token.json也可以手动创建和更新，本页面只作为工具使用。</small><br>
	        有bug请反馈。<br>
	        <a href="https://mlh-aids.github.io/dl_token">[下载更新]</a>
      </div>
	</div>
	<div class="mb-3">
	当前版本：v0.1.3。<span id="news"></span>
	</div>
</div>
<script>
// 初始化提示框
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script src="https://mlh-aids.github.io/tokennews.js"></script>
</body>
</html>