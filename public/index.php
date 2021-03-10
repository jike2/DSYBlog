<?php

/* 定义这个常量是为了在application.ini中引用*/
//define('APPLICATION_PATH', dirname(__FILE__).'/../');
//$application = new \Yaf\Application( APPLICATION_PATH . "/conf/application.ini", ini_get('yaf.environ'));
//$application->bootstrap()->run();
define("APPLICATION_PATH", realpath(dirname(__FILE__).'/../'));
$App = new \Yaf\Application(APPLICATION_PATH . "/conf/application.ini", ini_get('yaf.environ'));
$App->bootstrap()->run();
?>
