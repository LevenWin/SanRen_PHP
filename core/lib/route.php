<?php
namespace core\lib;
use core\lib\config;
class route{

    public $ctrl;
    public $action;

    public  function  __construct()
    {
       /**
        * 1隐藏index.php
        * 2.获取url 参数部分
        * 3.返回对应控制街和方法
        */
//REQUEST_URI
       if (isset($_SERVER['REDIRECT_URL'])&&$_SERVER['REDIRECT_URL']!='/'){
           $path=$_SERVER['REDIRECT_URL'];
           $patharr=explode('/',trim($path,'/'));


           unset($patharr[0]);


           if (isset($patharr[1])){
               $this->ctrl=$patharr[1];
               unset($patharr[1]);
           }else{
               $this->ctrl=config::get('CTRL','route');
           }
           if (isset($patharr[2])){
               $this->action=$patharr[2];
               unset($patharr[2]);
           }else{
               $this->action=config::get('ACTION','route');
           }


           $count=count($patharr)+3;
           $i=3;

           while ($i<$count){
               $_GET[$patharr[$i]]=$patharr[$i+1];
               $i=$i+2;
           }


       }else{
           $this->ctrl=config::get('CTRL','route');
           $this->action=config::get('ACTION','route');
       }
    }


}


?>