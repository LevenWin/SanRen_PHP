<?php 
/**
 * 入口文件
 * 1.定义常量
 * 2.家在函数库
 * 3.启动框架
 */
define('IMOOC',dirname(realpath('index.php')));
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/app');
define('DEBUG', true);
define('MODULE', 'app');

include "vendor/autoload.php";

if (DEBUG) {
	//第三方错误展现类
	$whoops = new \Whoops\Run;
	$errortitle="框架出错了";
	$option=new \Whoops\Handler\PrettyPageHandler();
	$option->setPageTitle($errortitle);
	$whoops->pushHandler($option);
	$whoops->register();
	ini_set('display_error','On');
}else{
	ini_set('display_error','Off');
}
// echo IMOOC;
// echo CORE.'/common/function.php';
include CORE.'/common/function.php';
include CORE.'/imooc.php';
spl_autoload_register('\core\imooc::load');
//P(IMOOC);
//exit();
\core\imooc::run();
//
//P(IMOOC);




 ?>
