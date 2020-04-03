<?php
/**
 * Created by PhpStorm.
 * User: Bad boy
 * Date: 2020/4/3
 * Time: 10:07
 */

echo "<pre>";

$san['shuguo']=[
    'liubei' => 90,
    'guanyu' => 88,
    'zhangfei' => 96,
    'machao' => 76
];
$san['wuguo']=[
    'sunqun' => 90,
    'sunce' => 98,
    'sunjian' => 96,
];
$san['weiguo']=[
    'caocao' => 90,
    'caopi' => 78,
    'caochong' => 96,
    'caozhang' => 76
];

$i = -1;
$a = 'none';
$c = 'none';

foreach($san as $key => $value){
    foreach($value as $k => $v){
        $contry = $key;
        $name = $a;
        $max = $i;
        if ($v > $max){
            $name = $k;
            $max = $v;
        }
        $a = $name;
        $i = $max;
    }
    $c = $key;
    $a = $name;
    $i = $max;
    $result = ['name'=>$a,'max'=>$i];
}
print_r($result);