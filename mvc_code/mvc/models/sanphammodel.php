<?php
class SanPhamModel extends DB{
    
    public function Manager(){
        $qr = "SELECT * FROM manager";
        $rows = mysqli_query($this->conn, $qr);
        $mang = array();
        while ($row = mysqli_fetch_array($rows)){
            $mang = $row;
        }
        return json_encode($mang); // với json thì ngôn ngữ khác cũng có thể đọc data
    } 

}
?>