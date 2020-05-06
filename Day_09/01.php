<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="02_submit.php">
  <p>请输入姓名：
    <label for="textfield"></label>
    <input type="text" name="textfield" id="textfield" />
  </p>
  <p>请输入年龄：
    <label for="textfield2"></label>
    <input type="text" name="textfield2" id="textfield2" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="提交" />
  </p>
</form>
</body>
</html>
<?php
if (isset($_POST['button'])){
	echo "Your Name is:".$_POST['textfield']."<br />";
	echo "Your Age is:".$_POST['textfield2'];
}
?>