<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="textarea"></label>
    <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea>
    <input type="hidden" name="hiddenField" id="hiddenField" value="Bad" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="提交" />
  </p>
</form>
</body>
</html>
<?php
if (isset($_POST['button'])){
	echo $_POST['hiddenField']."<br />";
	echo nl2br($_POST['textarea']);
	}
?>