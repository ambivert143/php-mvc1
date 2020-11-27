<?php
    class InsertDB extends DB{

        public function DataInsert($id, $title, $description, $create_at, $update_at){
            $qr = "INSERT INTO manager VALUE(null, '$id', '$title', '$description', '$create_at', '$update_at')";
            
            $result = false;
            if(mysqli_query($this->conn, $qr)) {
                $result = true;
            }
            return json_encode($result);
        }
    
    }
?>