<?php

namespace app\ctrl;
class messageCtrl extends \core\imooc
{
    public function releaseMsgs()
    {
//        require_once dirname(__FILE__) . '/common/common.php';
//        require_once dirname(__file__) . '/common/DBTool.php';
        if (!isset($_POST['userId'])||empty($_POST['userId'])) {
            JsonEcho(0,"","参数不全");
        }
        $content=$_POST['content'];
        $userId=$_POST['userId'];

//        P($_POST['imgs']);
//        exit();
        $messageId = md5(uniqid(rand())) . base64_encode(time());
        $imgsUrl = "";
        if (isset($_POST['imgs'])) {
            $imgs = $_POST['imgs']; // 得到参数
            $arr = explode(',', $imgs);

//            $path = getcwd() . '/resources/imgs';
////            P($path);
//            if (!is_dir($path)) {
//                mkdir($path,0777,true);
//            }

            if (isset($arr[0]) && $arr[0]) {
                foreach ($arr as $key) {
                    $img = base64_decode($key); // 将格式为base64的字符串解码
//                    if (isImage($img)){
                        $prePath = md5(uniqid(rand())) . ".jpg";
                        $path = "/Applications/XAMPP/htdocs/xd/resources/imgs/".$prePath; // 产生随机唯一的名字作为文件名
                        if (file_put_contents($path, $img)) {

                        } else {
                            JsonEcho(0, "", "$path");
                        }
                        $imgsUrl = $imgsUrl . "," . "/xd/resources/imgs/" . $prePath;
//                    }

                }
                if (strlen($imgsUrl)>1){
                    $imgsUrl = substr($imgsUrl, 1);
                }

            }

        }

        $data=array(
            'content'=>$content,
            'imgs'=>$imgsUrl,
            'userId'=>$userId,
            'messageId'=>$messageId
        );
        $model=new \app\model\messageModel();
        $ret=$model->insertOne($data);
        if ($ret){
            JsonEcho(1, "", "信息上传成功");
        }else{
            JsonEcho(0, "", "信息上传失败");
        }

    }

    public function  getMsgs(){

        $userId=$_GET['userId'];
        $page=$_GET['page'];

        if (isValid($userId)&&intval($page)){
            $msgsmodel =new \app\model\messageModel();
            $userModel=new \app\model\usersModel();

            $ret1=$msgsmodel->lists($page);
            $newRet=array();
            foreach ($ret1 as $row){
                if (is_array($row)){
                    $imgs=$row['imgs'];

                    if (isValid($imgs)){
                        $imgsArr=explode(',',$imgs);
                        $newimgarr=array();
                        foreach ($imgsArr as $img){
                            $img= "http://" . get_server_ip() .':8081'.$img;
                            array_push($newimgarr,$img);
                        }
                        $row['imgs']=implode(',',$newimgarr);
                    }else{
                        $row['imgs']=null;
                    }

                }
                array_push($newRet,$row);
            }
            $data=array();
            if (!$newRet){
                JsonEcho(0,'','没有数据');
            }else{
                foreach ($newRet as $row){
                    if (is_array($row)){
                        $ret=$userModel->getOneByUserId($row['userId']);
                        if (is_array($ret)){
                            array_push($data,array_merge($row,$ret));
                        }
                    }



                }
            }

            JsonEcho(1,$data,'信息获取成功!');

        }else{
            JsonEcho(0,'','参数错误!');
        }

    }

}


?>

