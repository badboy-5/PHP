<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$score=101;
if ($score>100)
    $grade="请输入100以内的成绩！";
else {
# int为取整
    $a = (int)($score / 10);
    switch ($a) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            $grade = "不及格！";
            break;
        case 6:
        case 7:
            $grade = "及格！";
            break;
        case 8:
            $grade = "良好！";
            break;
        case 9:
        case 10:
            $grade = "优秀！";
            break;
        default:
            $grade = "分数错误！";
    }
}

echo $grade;

?>