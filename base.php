<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2018/7/9
 * Time: 22:51
 */

//一：变量内存
//定义一个变量
$a = range(0,1000);
var_dump(memory_get_usage());
//定义变量b，将a变量的值赋值给b
//cow   copy on write
$b = $a;
var_dump(memory_get_usage());

//对a进行修改  //虽然值没变，但是重新执行写操作了
$a = range(0,1000);
var_dump(memory_get_usage());

//查看三次内存
//int(401552) int(401552) int(430272)






//二：变量引用的时候

//定义一个变量
$a = range(0,1000);
var_dump(memory_get_usage());
//定义变量b，将a变量的值赋值给b
//cow   copy on write
//这里用引用的方式
$b = &$a;
var_dump(memory_get_usage());

//对a进行修改  //虽然值没变，但是重新执行写操作了
$a = range(0,1000);
var_dump(memory_get_usage());

//查看三次内存
//int(401536) int(401560) int(401560)




//三：zend引擎 zval变量容器
$z = range(0,3);
xdebug_debug_zval('a');
