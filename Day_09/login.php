<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    请输入用户名：
    <input type="text" name="user" id="textfield" />
  </p>
  <p>
    请输入密码：
    <input type="password" name="passwd" id="textfield2" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="提交" />
  </p>
</form>
</body>
</html>
<?php
if (isset($_POST['button'])){
	if (($_POST['user']=='bad')&&($_POST['passwd'])=='123'){
		$name=$_POST['user'];
		$passwd=$_POST['passwd'];
		echo "<script>window.location.href='login1.php?user=$name&passwd=$passwd';</script>";
		}
	}
?>