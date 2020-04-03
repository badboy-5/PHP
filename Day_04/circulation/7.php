<?php
$arr = array('one','two','three','four','stop','five','six');
while (list (,$val) = each($arr)){
    if ($val == 'stop'){
        break;
    }
    echo "$val<br/>";
}
?>