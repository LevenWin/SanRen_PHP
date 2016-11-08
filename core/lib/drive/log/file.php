<?php
namespace core\lib\drive\log;
//文件系统

use core\lib\config;

class file{
    public $path;
    public function __construct()
    {
        $conf=config::get('OPTION','log');
        $this->path=$conf['PATH'];
    }

    public function log($message,$file='log'){
      /**
       * 1.确定文件是否存在
       * 2.写入日志
       */
      if(!is_dir($this->path)){
          mkdir($this->path,'0777',true);
      }
      $message=date('Y-m-d H:i:s').'    '.json_encode($message,JSON_UNESCAPED_UNICODE).PHP_EOL;

     return file_put_contents($this->path.$file.'.php',$message,FILE_APPEND);

    }
}