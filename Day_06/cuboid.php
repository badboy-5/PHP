<?php
header("Content-Type:text/html;charset=utf-8");
# @Time : 2020/4/16
# @Software: PhpStorm
# @Author: Bad
# @DESC:

function cuboid($a,$b,$h,$flag=1){
    $biaomianji = 2*($a*$b+$a*$h+$b*$h);
    $tiji = $a*$b*$h;
    if ($flag==0)
        return $biaomianji;
    else
        return $tiji;
}



echo '表面积为:'.cuboid(2,3,4,0)."<br />";
echo '体积为:'.cuboid(2,3,4);

?>
