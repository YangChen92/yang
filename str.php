<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2018/7/11
 * Time: 21:31
 */
//字符串的三种定义方式
//单引号 双引号 Heredoc和Nowdoc
//单引号效率高于双引号
$str = 'abc$ad';
$str = "abcd'{$a}'gh";


//都是处理大文本
//heredoc 类似双引号
$str = <<< 'EoT'
sting 
EoT;

//nowdoc类似单引号

