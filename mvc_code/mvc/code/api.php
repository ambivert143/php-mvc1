<?php
// file này dùng để đưa data về dạng json và thêm data thủ công khi nhập

class API extends Controller{
    public function DanhSach(){
        // model
        $sanpham = $this->model("sanphammodel");
        $sp = $sanpham->Manager();
        $danhsach = [];

        while($s = mysqli_fetch_array($sp)){
            array_push($danhsach, new Manager(
                $s['id'],
                $s['title'],
                $s['description'],
                $s['image'],
                $s['status'],
                $s['create_at'],
                $s['update_at'],
            ));
        }
        echo json_encode($danhsach);
    }
}

?>