<?php
namespace core\lib;
use  core\lib\config;
class model extends \medoo
{
//    public function __construct()
//    {
//
//       $temp=config::all('database');
//        try{
//            parent::__construct($temp['DSN'], $temp['USERNAME'],$temp['PASSWD']);
//            $this->exec("SET names utf8");
//        }catch (\PDOException $e){
//            P($e->getMessage());
//        }
//
//    }
//    public function getAll($sql){
//        $ret=$this->query($sql);
//        $arr=array();
//        while ($row=$ret->fetchObject()){
//            $arr[]=$row;
//        }
//        return $arr;
//    }
    public function __construct()
    {
        $options=config::all('database');
        parent::__construct($options);
    }


}



?>