<?php
    class Home extends Controller{


        public $InsertDB;

        function __construct()
        {
            $this->InsertDB = $this->model("InsertDB");
        }

        function Manager(){
            $this->view("master", [
                "page" => "news"
            ]);
        }

        function Edit(){
            $this->view("master", [
                "page" => "edit"
            ]);
        }

        function Listpost(){
            $this->view("master", [
                "page" => "listpost"
            ]);
        }

        function Showpost(){
            $this->view("master", [
                "page" => "showpost"
            ]);
        }

        function Paginator(){
            $this->view("master", [
                "page" => "paginator"
            ]);
        }

        public function Data(){

            //get data
            if(isset($_POST['btnSubmit'])){
                $title = $_POST["title"];
                $description = $_POST["description"];
                $image = $_POST["image"];
                $status = $_POST["status"];
                $create_at = $_POST["create_at"];
                $update_at = $_POST["update_at"];
            //insert database with table sanpham
                $kq = $this->InsertDB->DataInsert($title, $description, $image, $status, $create_at, $update_at);

            //ping OK and fail
                $this->view("master", [
                    "page" => "news",
                    "result" => $kq
                ]);
            }

        }

    }
?>