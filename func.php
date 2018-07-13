<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2018/7/13
 * Time: 22:13
 */
$count = 5;
function get_count()
{
    static $count;
    return $count++;
}
echo $count;
++$count;
echo "\n";
echo get_count();
echo "\n";
echo get_count();

echo "/////////" . "\n";


//static 静态变量
//仅初始化一次
//初始化时需要赋值
//每次执行函数该值会保留
//static修饰的变量是局部的，仅在函数内部有效
//可以记录函数的调用次数，从而可以在某些条件下终止递归

function myFunc()
{
    static $a = 1;//初始化，只执行一次
    echo $a++ ;
    echo "\n";
}
myFunc();
myFunc();
myFunc();

echo "//////////" . "\n";

$n = 1;
function my_func($n)
{
    $n = 2;
}
my_func($n);
echo $n;
echo "//////////" . "\n";
$m = 1;
function my_func1(&$m)
{
    $m = 2;
}
my_func1($m);
echo $m;

//系统内置函数
//ip2long();
//long2ip();
//序列化和反序列化
//serialize();
//unserialize();
//字符处理函数
//implode();explode();join();str_replace();.........
//数组函数
//array_keys();array_values();array_diff();array_shift();array_intersect();array_merge();array_pop();array_push();sort().............