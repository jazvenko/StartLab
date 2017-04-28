<?php

//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);

$cmd = htmlspecialchars($_GET["cmd"]);
$split = explode(' ', $cmd, 3);
$json = array ('id'=>1,'name'=>"ivan",'country'=>'Russia',"office"=>array("yandex"," management"));
$json457 = array ('id'=>$split[0],'name'=>$split[1],'country'=>$split[2],"office"=>array('id' => "123123",'id2' => "222222"));

//print_r(array_diff(explode(' ', $cmd, 3),array("")));
print_r(json_encode($json457, JSON_UNESCAPED_UNICODE));
?>


