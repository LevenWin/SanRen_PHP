<?php

namespace app\ctrl;
class  userCtrl extends \core\imooc {

    function  userInfor(){

        if (isValid($_GET['userId'])){
            $userId=$_GET['userId'];

            $model= new \app\model\usersModel();
            $ret=$model->getOneByUserId($userId);
            if ($ret){
                JsonEcho(1,$ret,'获取成功!');
            }else{
                JsonEcho(0,$ret,'获取失败!');
            }
        }else{
            JsonEcho(0,'','参数错误!');
        }
    }

    function login(){

        $phone=$_POST['phone'];
        $password=$_POST['password'];
       if (isValid($phone)&&isValid($password)){
           $model=new \app\model\usersModel();
           $result=$model->getOneByPhone($phone);
           if ($result['password']==$password){
               JsonEcho(1,$result,'登录成功!');
           }else{
               JsonEcho(0,$result,'用户不存在!');
           }

       }else{
           JsonEcho(0,'','参数错误!');
       }
    }
    function register(){
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        if (isValid($phone)&&isValid($password)){
            $model=new \app\model\usersModel();
            $result=$model->getOneByPhone($phone);
            if ($result){
                JsonEcho(0,'','用户已存在');
            }else{
                $userId=md5(uniqid(rand())).base64_encode($phone);
                $data=array(
                    'phone'=>$phone,
                    'password'=>$password,
                    'userId'=>$userId
                );
                $ret=$model->inserteOne($data);
                if ($ret){
                    JsonEcho(1,'','注册成功!');
                }else{
                    JsonEcho(0,'','注册失败!');
                }

            }

        }else{
            JsonEcho(0,'','参数错误!');
        }
    }

    /**
     * 修改个人信息
     */
    function modify(){
        if (isValid($_POST['userId'])) {
            $update=array();
            while (list($key,$value)=each($_POST)) {
                $update[$key]=$value;
            }
            if (array_key_exists('headImg',$update)){

                $img = base64_decode($update['headImg']); // 将格式为base64的字符串解码
//                    if (isImage($img)){
                $prePath = md5(time()) . ".jpg";
                $path = "/Applications/XAMPP/htdocs/xd/resources/imgs/".$prePath; // 产生随机唯一的名字作为文件名
                if (file_put_contents($path, $img)) {

                } else {
                    JsonEcho(0, "", "$path");
                }
                $imgsUrl = "/xd/resources/imgs/" . $prePath;
//                    }
                $update['headImg']=$imgsUrl;
            }

            $userId=$_POST['userId'];

            $model=new \app\model\usersModel();

            if ($model->setOne($userId,$update)) {
                JsonEcho(1,$model->getOneByUserId($userId),"修改成功!");
            }else{
                JsonEcho(0,"","修改失败!");
            }
        }else{
            JsonEcho(0,"","userId缺失或无效！");

        }
    }



    /**
     * 登出
     */
    function logout(){

    }


}