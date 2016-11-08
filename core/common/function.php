<?php 


	function P($var){
		if (is_bool($var)) {
			var_dump($var);
		}elseif (is_null($var)) {
			var_dump(null);
		}else{
			echo "<pre style='position:relative ;z-index:1000;padding:10px; border-radius:5px;background:#f5f5f5;
					border:1px solid #aaa;font-size:16px;line-height:18px;opacity:0.9;'>".print_r($var,true)."</pre>";
		}


	}

    function P_exit($var){
        if (is_bool($var)) {
            var_dump($var);
        }elseif (is_null($var)) {
            var_dump(null);
        }else{
            echo "<pre style='position:relative ;z-index:1000;padding:10px; border-radius:5px;background:#f5f5f5;
                        border:1px solid #aaa;font-size:16px;line-height:18px;opacity:0.9;'>".print_r($var,true)."</pre>";
        }

        exit();
    }
    function JsonEcho($code,$data,$message){
        $arr = array('status' => $code,'data'=>$data,'message'=>"$message");
        echo json_encode($arr);
        exit();
    }
    function get_client_ip()
    {
        if ($_SERVER['REMOTE_ADDR']) {
            $cip = $_SERVER['REMOTE_ADDR'];
        } elseif (getenv("REMOTE_ADDR")) {
            $cip = getenv("REMOTE_ADDR");
        } elseif (getenv("HTTP_CLIENT_IP")) {
            $cip = getenv("HTTP_CLIENT_IP");
        } else {
            $cip = "unknown";
        }
        return $cip;
    }
    function get_server_ip(){
        if(isset($_SERVER)){

        if($_SERVER['SERVER_ADDR']){

            $server_ip=$_SERVER['SERVER_ADDR'];

        }else{

            $server_ip=$_SERVER['LOCAL_ADDR'];

        }

    }else{

        $server_ip = getenv('SERVER_ADDR');

    }

    return $server_ip;

    }

    function isImage($filename){
        $types = '.gif|.jpeg|.png|.bmp';//定义检查的图片类型
        if(file_exists($filename)){
            $info = getimagesize($filename);
            $ext = image_type_to_extension($info['2']);
            return stripos($types,$ext);
        }else{
            return false;
        }
    }

    function isValid($var){
        return isset($var)&&!empty($var);
    }



?>