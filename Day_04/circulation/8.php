<?php
$i = 0;
while (++$i){
    switch($i){
        case 5:
            echo "At 5<br/>";
            break 1;  //当变量i的值为5时，直接跳出switch循环
        case 10:
            echo "At 10;quitting<br/>";
            break 2;  //当变量i的值为10时，跳出while循环
        default:
            break;
    }
}
?>