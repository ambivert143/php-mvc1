<?php
    class Database{
        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $dbname = "edit";

        private $conn = null;
        private $result = null;

        public function Connect(){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if(!$this->conn){
                echo "Connect Fail";
                exit();
            }else{
                mysqli_set_charset($this->conn,"utf8");
            }
            return $this->conn;
        }

        // Thực thi lệnh truy vấn
        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        // lấy data
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_all($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }


        //data edit masp
        public function getData1($table, $id){
            $sql = "SELECT * FROM $table WHERE id= '$id'";
            $this->execute($sql);

            if($this->num_rows()!= 0){
                $data = mysqli_fetch_all($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        // Đếm số bản ghi
        public function num_rows(){
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }else{
                $num = 0;
            }
            return $num;
        }

        // lấy toàn bộ data

        public function getAllData($table){
            $sql = "SELECT * FROM $table";
            $this->execute($sql);

            if(!$this->num_rows()==0){
                $data = 0;
            }else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }
        

        // add data
        public function InsertData($masp, $tensp, $create_at, $update_at){
            $sql = "INSERT INTO sanpham(id, masp, tensp, create_at, update_at) VALUES(null, '$masp', '$tensp', '$create_at', '$update_at')";
            return $this->execute($sql);
        }

        // Sửa data
        public function UpdateData($id ,$masp, $tensp, $create_at, $update_at){
            $sql = "UPDATE sanpham SET masp ='$masp', tensp='$tensp', create_at='$create_at', update_at='$update_at' WHERE id= '$id'";
            return $this->execute($sql);
        }

        // Delete data
        public function Delete($id, $table){
            $sql = "DELETE FROM $table WHERE id='$id'";
            return $this->execute($sql);
        }
    }

?>