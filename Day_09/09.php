<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="598" height="177" border="1" align="center">
    <tr>
      <td width="117">用户名</td>
      <td width="465"><label for="textfield"></label>
      <input type="text" name="textfield" id="textfield" /></td>
    </tr>
    <tr>
      <td>密码</td>
      <td><label for="textfield2"></label>
      <input type="password" name="textfield2" id="textfield2" /></td>
    </tr>
    <tr>
      <td>性别</td>
      <td><input type="radio" name="sex" value="男" />
      <label for="radio">男
        <input type="radio" name="sex" value="女" />
      女</label></td>
    </tr>
    <tr>
      <td>职称</td>
      <td><label for="select"></label>
        <select name="select" id="select">
          <option value="教授">教授</option>
          <option value="副教授">副教授</option>
          <option value="讲师">讲师</option>
      </select></td>
    </tr>
    <tr>
      <td>爱好</td>
      <td><input type="checkbox" name="hobby[]" id="checkbox" value="轮滑"/>
      <label for="checkbox"></label>
      轮滑
      <input type="checkbox" name="hobby[]" id="checkbox2" value="篮球"/>
      <label for="checkbox2">篮球
        <input type="checkbox" name="hobby[]" id="checkbox3" value="乒乓球"/>
      乒乓球</label></td>
    </tr>
    <tr>
      <td>个人简历</td>
      <td><label for="textarea"></label>
      <textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="提交" /></td>
    </tr>
  </table>
</form>
</body>
</html>
<?php
if (isset($_POST['button'])){
	echo "用户名:".$_POST['textfield']."<br />";
	echo "密码:".$_POST['textfield2']."<br />";
	echo "性别:".$_POST['sex']."<br />";
	echo "职称:".$_POST['select']."<br />";
	$hobbys=implode(",",$_POST['hobby']);
	echo "爱好:".$hobbys."<br />";
	echo "个人简介：".nl2br($_POST['textarea']);
	}
?>

