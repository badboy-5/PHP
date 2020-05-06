<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <p>
    <input type="text" name="textfield" id="textfield" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="submit" />
    <input type="button" name="button2" id="button2" value="button" onclick="fun1();" />
    <input type="reset" name="button3" id="button3" value="reset" />
  </p>
</form>
</body>
</html>
<script>
function fun1(){
	alert('Bad')
	}
</script>