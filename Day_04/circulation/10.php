<?php
$s=0;
for($i=0;;) {
    $i++;
# 如果$i的值为3的倍数，则跳过此次循环
    if ($i % 3 == 0)
        continue;
    $s += $i;
# 如果$i的值为100，则终止循环
    if ($i==100)
        break;
}
echo $s;  //输出$s
?>