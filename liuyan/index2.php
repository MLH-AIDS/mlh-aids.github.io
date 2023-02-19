<!DOCTAPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>留言</title>
<style>
span.fname{color:blue;font-size:18px;}
div.lylist{background-color:#eeeeee}
#sucpost{color:green;display:;}
</style>
</head>
<body>
<a href="index.php"><div style="width:35px;padding:5px;background:#eee;border:1px solid #bbb;display:inline-block;">发送<br/>留言</div></a>
<a href="index2.php"><div style="width:35px;padding:5px;background:#eee;border:1px solid #bbb;display:inline-block;">刷新</div></a><br/>
<?php
// $fname=$_POST["fname"]
// $ftalk=$_POST["ftalk"]

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // if (empty($_POST["fname"])) {
    // $fnameErr = "名字是必需的。";
  // } else {
    // $fname = test_input($_POST["fname"]);
  // }

  // if (empty($_POST["ftalk"])) {
    // $ftalkErr = "留言内容是必需的。";
  // } else {
    // $ftalk = test_input($_POST["ftalk"]);
  // }
// }
?>
<?php
if(empty($_POST)){}
elseif(empty($_POST["fname"])){}
elseif(empty($_POST["ftalk"])){}
else{
$servername = "sql113.epizy.com";
$username = "epiz_33623191";
$password = "fdGM3ICZ9B4";
$dbname = "epiz_33623191_myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO MyGuests (fname, ftalk)
VALUES ('".$_POST["fname"]."', '".$_POST["ftalk"]."')";
 
if ($conn->query($sql) === TRUE) {
    echo "<span id='sucpost'>发送成功</span>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();}
?>
<div class="lylist">
<p>留言列表：</p>
<?php
$servername = "sql113.epizy.com";
$username = "epiz_33623191";
$password = "fdGM3ICZ9B4";
$dbname = "epiz_33623191_myDB";
 
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT id, fname, ftalk FROM MyGuests";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "" . $row["id"]. " - <span class='fname'>" . $row["fname"]. "</span>：" . $row["ftalk"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
<p>---</p>
</div>
<script>
setTimeout((function(){document.getElementById("sucpost").style.display="none";alert(0)}),3000);
</body>
</html>