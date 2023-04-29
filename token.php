<!DOCTYPE html>
<html>
<head>

<!--
请运行ksweb，在浏览器访问 http://localhost:8080/token.php 使用本页面！
-->


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
$filename = isset($_REQUEST['filename'])? $_REQUEST['filename'] : 'token.json';
$token = isset($_REQUEST['token'])? $_REQUEST['token'] : '';
$test = str_replace("https://3dtank.com/play/?token=","",$token);
$test = str_replace("&sub_partner_id=partner4399","",$test);
$test = urldecode($test);
$data='{"errCode":0,"message":"ok","data":"'. $test .'","ticks":0}';
$flags = "FILE_USE_INCLUDE_PATH";
if(isset($_REQUEST['filename'])&&isset($_REQUEST['token'])){
file_put_contents($filename,$data);
}
echo "<p>当前json内容：".file_get_contents($filename)."</p>";
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
	本文件使用PHP代码，用正则表达式去除token中的不重要的部分并转译url符，然后在htdocs目录里创建/更新token.json文件。<br>
	token.json也可以自行创建和更新，本页面只作为工具使用。<br>
	有bug请反馈。<br>
	去除的部分：https://3dtank.com/play/?token=和&sub_partner_id=partner4399<br>
	如果本工具无法写入文件，查看htdocs目录的权限并修改。
	</div>
</div>

</body>
</html>