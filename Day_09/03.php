<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="get" action="">
	请输入姓名：<input type="text" name="textname" /><br />
	请输入年龄：<input type="text" name="textage" /><br />
	<input type="submit" name="button" value="确定" />
</form>
</body>
</html>
<?php
if (isset($_GET['button'])){
	echo "Your Name is:".$_GET['textname']."<br />";
	echo "Your Age is:".$_GET['textage'];
}
?>