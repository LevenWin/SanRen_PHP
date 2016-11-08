<?php 
namespace core ;
class imooc{
    static  public   $classMap=array();
    public  $assign;
	static public function run(){

//        \core\lib\log::init();
//        \core\lib\log::log(array('name'=>'liuwen','userId'=>'123'),'');
//        exit();
        $route= new \core\lib\route();
        $ctrlClass=$route->ctrl;
        $action=$route->action;


        $ctrlfile=APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $modulclass='\\'.MODULE.'\ctrl\\'.$ctrlClass.'ctrl';


        if (is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl =new $modulclass();
            $ctrl->$action();

        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
	}

	static  public  function load($class){
	    if (isset($classMap[$class])){
	        return true;
        }else{

            $class=str_replace('\\','/',$class);
            if (is_file(IMOOC.'/'.$class.'.php')){
                include IMOOC.'/'.$class.'.php';
               self::$classMap[$class]=$class;
            }else{
                return false;
            }

        }

    }

    public function assign($name,$value){
        $this->assign[$name]=$value;

    }
    public function display($file){
        $file=APP.'/views/'.$file;
        if (is_file($file)){


            \Twig_Autoloader::register();
            $loader=new \Twig_Loader_Filesystem(APP.'/views');
            $twig= new \Twig_Environment($loader,array(
                'cache'=>IMOOC.'/log/twig',
                'debug'=>DEBUG
            ));

            $template=$twig->loadTemplate('index.html');
            $template->display($this->assign?$this->assign:'');

        }
    }

}
 ?>