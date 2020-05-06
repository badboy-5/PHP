<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <label for="select"></label>
    <select name="select[]" id="select" multiple="multiple">
      <option value="一班">一班</option>
      <option value="二班">二班</option>
      <option value="三班">三班</option>
      <option value="四班">四班</option>
    </select>
  </p>
  <p>
    <input type="submit" name="button" id="button" value="提交" />
  </p>
</form>
</body>
</html>
<?php
if (isset($_POST['button'])){
	$class=implode(",",($_POST['select']));
	echo $class;
	}
?>
