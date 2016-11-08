<?php
namespace app\model;

use core\lib\model;

class usersModel extends model
{
    public $table='users';
    public function lists(){
        $ret=$this->select($this->table,'*',[
            'ORDER'=>['id'=>'DESC'],
        ]);
        return $ret;
    }
    public function getOneByName($name){
        $ret =$this->get($this->table,'*',array(
            'username'=>$name
        ));
        $ret=$this->modifyHeadImg($ret);
        return $ret;
    }
    public function getOneByPhone($phone){
        $ret =$this->get($this->table,'*',array(
            'phone'=>$phone
        ));
        $ret=$this->modifyHeadImg($ret);
        return $ret;
    }
    public function getOneByUserId($userId){
        $ret =$this->get($this->table,'*',array(
            'userId'=>$userId
        ));
        $ret=$this->modifyHeadImg($ret);
        return $ret;
    }

    public function setOne($id,$data){
        $ret= $this->update($this->table,$data,array(
            'userId'=>$id,
        ));
        return $ret;
    }
    public function deleteOne($id){
        $ret= $this->delete($this->table,array(
            'userId'=>$id
        ));
        return $ret;
    }
    public function inserteOne($data){
        $ret= $this->insert($this->table,$data);
        return $ret;
    }
    public function modifyHeadImg($ret){
        if (is_array($ret)){
            if (array_key_exists('headImg',$ret)&&isValid($ret['headImg'])){
                $ret['headImg']="http://" . get_server_ip().':8081' .$ret['headImg'];

            }
        }
        return $ret;
    }
}

?>