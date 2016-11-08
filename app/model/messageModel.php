<?php
namespace app\model;
use  core\lib\model;

class messageModel extends model
{
    public $table='msgs';
    public function lists($page=1){
        $page=$page-1;
        $start=5*$page;
        $end =5*($page+1);

        $ret=$this->select($this->table,'*',[
            'ORDER'=>['id'=>'DESC'],
            'LIMIT'=>[$start,$end]
        ]);
        return $ret;
    }

    public function insertOne($data){
        $ret=$this->insert($this->table,$data);
        return $ret;
    }
    public function getOne($name){
        $ret =$this->get($this->table,'*',array(
            'name'=>$name
        ));
        return ret;
    }
    public function setOne($id,$data){
        $ret= $this->update($this->table,$data,array(
            'userId'=>$id
        ));
        return $ret;
    }
    public function deleteOne($id){
        $ret= $this->delete($this->table,array(
            'userId'=>$id
        ));
        return $ret;
    }

}