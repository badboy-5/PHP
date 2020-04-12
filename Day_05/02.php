<?php


echo "<pre>";

$san['shuguo']=[
    'liubei' => 90,
    'guanyu' => 88,
    'zhangfei' => 96,
    'machao' => 95,
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

foreach($san as $key => $value){

    foreach($value as $k => $v) {
        if ($v > $i) {
            $name = $k;
            $i = $v;
            $contry = $key;
        }
    }
    $a = $name;
    $c = $contry;
}
    $result = ['contry'=>$c,'name'=>$a,'max'=>$i];

print_r($result);

//$name = 'none';         //假设最高分的姓名是'none'同学
//$max = -1;              //假设最高分是-1分
//$country = 'none';     //假设最高分的国家是'none'国
//foreach($san as $key => $value) {   //循环3次 ,每一次循环 $value又是一个数组
//    foreach($value as $k => $v){
//        if ($v > $max){     //如果每个人的分数高于最高分，则修改$name和$max
//            $name = $k;
//            $max = $v;
//            $country = $key;
//        }
//    }
//}
////var_dump($country,$name,$max);  //输出结果
////或者:
//$result = ['country'=>$country,'name'=>$name,'max'=>$max];
//print_r($result);