<?php
/**
 * Created by PhpStorm.
 * User: yangchen
 * Date: 2018/7/15
 * Time: 18:16
 */
//$file = __FILE__;
/*
$dir = realpath('.');
$tar_dir = $dir . '\\' . 'fopen.txt';
//echo "<pre>";
//var_dump($file);

$fp = fopen($tar_dir,'w');

if(!$fp)
{
   echo "system error";
    exit();
}

$file_data = 'qwer';
fwrite($fp,$file_data);
fclose($fp);
$res = file_get_contents($tar_dir);
echo $res;
*/

function loadDir($dir)
{
    $handle = opendir($dir);
    while(false !== ($file = readdir($handle)))
    {
        if($file != '.' && $file != '..')
        {
            echo $file . "<br />";
            if(filetype($dir . '/' . $file) == 'dir')
            {
                loadDir($dir . '/' . $file);
            }
        }
    }
}

$dir = realpath('.');
loadDir($dir);

