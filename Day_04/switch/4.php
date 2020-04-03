<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
    输入年月日
    <label for="textfield"></label>
    <input type="text" name="textfield" id="textfield" />
    <input type="submit" name="button" id="button" value="提交" />
</form>
</body>
</html>

<?php
# 调用文本域内输入的数值
if (isset($_POST['button'])) {
    list($year, $month, $day) = explode("，", $_POST['textfield']);

//echo $year."----".$month."----".$day;

    $days = $day;
    switch ($month - 1) {
        case 11:
            $days += 30;
        case 10:
            $days += 31;
        case 9:
            $days += 30;
        case 8:
            $days += 31;
        case 7:
            $days += 31;
        case 6:
            $days += 30;
        case 5:
            $days += 31;
        case 4:
            $days += 30;
        case 3:
            $days += 31;
        case 2:
            $days += 28;
            if (($year % 400 == 0) || ($year % 4 == 0) && ($year % 100 <> 0))
                $days += 1;
        case 1:
            $days += 31;
    }

    echo "这是{$year}年的第{$days}天！";
}
?>