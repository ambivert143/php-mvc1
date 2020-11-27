<?php
 class app{
     //xử lý url
    //http://localhost/controller(home)/actions/params
    protected $controller="Home";
    protected $action="Actions";
    protected $params=[];

    function __construct()
    {
        $arr = $this->UrlProcess(); //nhận tất cả những dữ liệu đc trả ra
        //echo $_GET["url"];
        //print_r($arr);
        //xu li Controller
        if (file_exists("/mvc/controllers/".$arr[0].".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./mvc/controllers/".$this->controller.".php";
        $this->controller = new $this->controller;
        
        //Xử lý acction
        if(isset($arr[1])){
            if(method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }

        //Xử lý params
        $this->params = $arr?array_values($arr):[];
        
        //tạo biến có kiểu C chạy hàm A và tham số truyền vào P
        call_user_func_array([$this->controller, $this->action], $this->params);
    
    }

    function UrlProcess(){
        if(isset($_GET["url"])) {
           //return $u = $_GET["url"];
           return explode("/", filter_var(trim($_GET["url"], "/")));
            //trim--loại bó đi các khoảng trắng, ký tự dư thừa
            //filter_var check theo /
        }
    }
 }
?>