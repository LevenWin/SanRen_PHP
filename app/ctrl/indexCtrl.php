<?php
namespace app\ctrl;

use core\lib\model;

class indexCtrl extends \core\imooc {

    public function index(){
//        P('this is function indexCtrl , method index');
//
//        $model= new \core\lib\model();
//        $sql="SELECT * FROM msgs";
//        $arr=$model->getAll($sql);
//
//
//        JsonEcho(1,$arr,'数据获取成功');

//        $temp=\core\lib\config::get('CTRL','route');
//        $temp=\core\lib\config::get('ACTION','route');
//
//模板使用
//        P(__DIR__);
//        P(getcwd());
//        $data=' 沃日啊 丹江口v';
//        $this->assign('data',$data);
//        $this->display('index.html');

////medoo 使用
//        $model =new model();
//        $data=$model->select('users','*');
//        P($data);

//        $data=array(
//            'name'=>'liuwen hahah',
//            'userId'=>'1234r3243243231r3rfecds'
//        );
        //返回插入的id值
//        $ret=$model->insert('users',$data);
//        dump($ret);


//        $model=new \app\model\usersModel();
//        $data=array(
//            'name'=>'小涛子'
//        );
//        $ret=$model->setOne('10206c543f45ecdd808950b608b5a24cMTM1NTQx',$data);
//        $ret=$model->deleteOne('10206c543f45ecdd808950b608b5a24cMTM1NTQx');
//        $ret=$model->lists();
//        P($ret);


//        P(get_server_ip());

    }

    function test(){
        $data=' 这是个测试';
        $this->assign('data',$data);
        $this->display('layout.html');
    }

}


?>