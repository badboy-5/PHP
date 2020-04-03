<?php
//使用utf-8编码，不然可能会出现乱码
header("Content-Type:text/html;charset=utf-8");

$year=2012;$month=2;
switch($month){
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $days=31;break;
    case 4:
    case 6:
    case 9:
    case 11:$days=30;break;
    case 2:
        if (($year % 400==0)||($year % 4==0) && ($year % 100<>0))
            $days=29;
        else
            $days=28;
            break;
    default:
        $days=-1;break;
}

echo "{$year}年{$month}月有{$days}天";

?>