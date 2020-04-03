<?php
for ($i=1;$i<=1;$i++) {
    echo "111<br/>";  //条件成立，输出
    while (1) {
        echo "222<br/>";  //条件成立，输出
        while (1) {
            echo "333<br/>";  //条件成立，输出
            continue 3;  //跳出三层循环，重新进入for循环
        }
        echo "444<br/>";
    }
    echo "555<br/>";
}



?>