<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2018/7/11
 * Time: 21:41
 */
//三大数据类型（标量 符合 特殊）
//标量
//1.浮点类型
//不能运用到比较运算中
$a = 0.1;
$b = 0.7;
if($a + $b == 0.8)
{
    var_dump(true);
}else{
    var_dump(false);
}

//布尔类型（七种情况）
//0，0.0，'','0',false,array(),NULL


//数组类型
//超全局数组
//$GLOBALS
// $_GET   $_POST  $REQUEST  $_COOKIE  $_SESSION  $SERVER  $FILES  $ENV

//$_SERVER
//$_SERVER['SERVER_ADDR']  //服务器端ip地址
//$_SERVER['SERVER_NAME']  //服务器名称
echo "<Pre>";
var_dump($_SERVER);


//array(73) {
//    ["ALLUSERSPROFILE"]=>
//  string(14) "C:\ProgramData"
//    ["APPDATA"]=>
//  string(33) "C:\Users\yangchen\AppData\Roaming"
//    ["CommonProgramFiles"]=>
//  string(35) "C:\Program Files (x86)\Common Files"
//    ["CommonProgramFiles(x86)"]=>
//  string(35) "C:\Program Files (x86)\Common Files"
//    ["CommonProgramW6432"]=>
//  string(29) "C:\Program Files\Common Files"
//    ["COMPUTERNAME"]=>
//  string(15) "DESKTOP-DBF6H76"
//    ["ComSpec"]=>
//  string(27) "C:\Windows\system32\cmd.exe"
//    ["DriverData"]=>
//  string(38) "C:\Windows\System32\Drivers\DriverData"
//    ["FPS_BROWSER_APP_PROFILE_STRING"]=>
//  string(17) "Internet Explorer"
//    ["FPS_BROWSER_USER_PROFILE_STRING"]=>
//  string(7) "Default"
//    ["HOMEDRIVE"]=>
//  string(2) "C:"
//    ["HOMEPATH"]=>
//  string(15) "\Users\yangchen"
//    ["LOCALAPPDATA"]=>
//  string(31) "C:\Users\yangchen\AppData\Local"
//    ["LOGONSERVER"]=>
//  string(17) "\\DESKTOP-DBF6H76"
//    ["NUMBER_OF_PROCESSORS"]=>
//  string(1) "4"
//    ["OneDrive"]=>
//  string(26) "C:\Users\yangchen\OneDrive"
//    ["OS"]=>
//  string(10) "Windows_NT"
//    ["Path"]=>
//  string(557) "C:\Program Files (x86)\Intel\iCLS Client\;C:\Program Files\Intel\iCLS Client\;C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;C:\Windows\System32\OpenSSH\;C:\Program Files\Intel\Intel(R) Management Engine Components\DAL;C:\Program Files (x86)\Intel\Intel(R) Management Engine Components\DAL;C:\Program Files\Intel\Intel(R) Management Engine Components\IPT;C:\Program Files (x86)\Intel\Intel(R) Management Engine Components\IPT;C:\Program Files\Git\cmd;C:\Users\yangchen\AppData\Local\Microsoft\WindowsApps"
//    ["PATHEXT"]=>
//  string(53) ".COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC"
//    ["PROCESSOR_ARCHITECTURE"]=>
//  string(3) "x86"
//    ["PROCESSOR_ARCHITEW6432"]=>
//  string(5) "AMD64"
//    ["PROCESSOR_IDENTIFIER"]=>
//  string(50) "Intel64 Family 6 Model 58 Stepping 9, GenuineIntel"
//    ["PROCESSOR_LEVEL"]=>
//  string(1) "6"
//    ["PROCESSOR_REVISION"]=>
//  string(4) "3a09"
//    ["ProgramData"]=>
//  string(14) "C:\ProgramData"
//    ["ProgramFiles"]=>
//  string(22) "C:\Program Files (x86)"
//    ["ProgramFiles(x86)"]=>
//  string(22) "C:\Program Files (x86)"
//    ["ProgramW6432"]=>
//  string(16) "C:\Program Files"
//    ["PROMPT"]=>
//  string(4) "$P$G"
//    ["PSModulePath"]=>
//  string(93) "C:\Program Files\WindowsPowerShell\Modules;C:\Windows\system32\WindowsPowerShell\v1.0\Modules"
//    ["PUBLIC"]=>
//  string(15) "C:\Users\Public"
//    ["SystemDrive"]=>
//  string(2) "C:"
//    ["SystemRoot"]=>
//  string(10) "C:\Windows"
//    ["TEMP"]=>
//  string(36) "C:\Users\yangchen\AppData\Local\Temp"
//    ["TMP"]=>
//  string(36) "C:\Users\yangchen\AppData\Local\Temp"
//    ["USERDOMAIN"]=>
//  string(15) "DESKTOP-DBF6H76"
//    ["USERDOMAIN_ROAMINGPROFILE"]=>
//  string(15) "DESKTOP-DBF6H76"
//    ["USERNAME"]=>
//  string(8) "yangchen"
//    ["USERPROFILE"]=>
//  string(17) "C:\Users\yangchen"
//    ["WEBKIT_IGNORE_SSL_ERRORS"]=>
//  string(1) "1"
//    ["windir"]=>
//  string(10) "C:\Windows"
//    ["__COMPAT_LAYER"]=>
//  string(9) "Installer"
//    ["HTTP_ACCEPT_LANGUAGE"]=>
//  string(14) "zh-CN,zh;q=0.9"
//    ["HTTP_ACCEPT_ENCODING"]=>
//  string(17) "gzip, deflate, br"
//    ["HTTP_ACCEPT"]=>
//  string(85) "text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8"
//    ["HTTP_USER_AGENT"]=>
//  string(114) "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.99 Safari/537.36"
//    ["HTTP_UPGRADE_INSECURE_REQUESTS"]=>
//  string(1) "1"
//    ["HTTP_CONNECTION"]=>
//  string(10) "keep-alive"
//    ["HTTP_HOST"]=>
//  string(9) "localhost"
//    ["REDIRECT_STATUS"]=>
//  string(3) "200"
//    ["SERVER_NAME"]=>
//  string(9) "localhost"
//    ["SERVER_PORT"]=>
//  string(2) "80"
//    ["SERVER_ADDR"]=>
//  string(9) "127.0.0.1"
//    ["REMOTE_PORT"]=>
//  string(4) "3712"
//    ["REMOTE_ADDR"]=>
//  string(9) "127.0.0.1"
//    ["SERVER_SOFTWARE"]=>
//  string(12) "nginx/1.11.5"
//    ["GATEWAY_INTERFACE"]=>
//  string(7) "CGI/1.1"
//    ["SERVER_PROTOCOL"]=>
//  string(8) "HTTP/1.1"
//    ["DOCUMENT_ROOT"]=>
//  string(27) "C:/phpStudy/PHPTutorial/WWW"
//    ["DOCUMENT_URI"]=>
//  string(18) "/yang/dataType.php"
//    ["REQUEST_URI"]=>
//  string(18) "/yang/dataType.php"
//    ["SCRIPT_NAME"]=>
//  string(18) "/yang/dataType.php"
//    ["CONTENT_LENGTH"]=>
//  string(0) ""
//    ["CONTENT_TYPE"]=>
//  string(0) ""
//    ["REQUEST_METHOD"]=>
//  string(3) "GET"
//    ["QUERY_STRING"]=>
//  string(0) ""
//    ["PATH_TRANSLATED"]=>
//  string(27) "C:/phpStudy/PHPTutorial/WWW"
//    ["PATH_INFO"]=>
//  string(0) ""
//    ["SCRIPT_FILENAME"]=>
//  string(45) "C:/phpStudy/PHPTutorial/WWW/yang/dataType.php"
//    ["FCGI_ROLE"]=>
//  string(9) "RESPONDER"
//    ["PHP_SELF"]=>
//  string(18) "/yang/dataType.php"
//    ["REQUEST_TIME_FLOAT"]=>
//  float(1531317170.9135)
//  ["REQUEST_TIME"]=>
//  int(1531317170)
//}

//NULL(三种情况，直接赋值为NULL，未定义的变量，unset销毁的变量)

//常量
//定义方式  const define，const更快，define不能定义类常量，const可以
//const为语言结构
//define为函数
//常量一经定义，不能被修改也不能被删除
//预定义常量
//__FILE__ 、__LINE__。。。。。。

//运算符优先级
$a = 0;
$b = 0;
if($a = 3 > 0 || $b = 3 > 0)
{
    $a++;
    $b++;
    echo $a . "\n";
    echo $b . "\n";
}
//答案：1
//      1
//    > 大于 || 大于 =
//$a = true, $b = 0 所以 true++为1 0++ 为1