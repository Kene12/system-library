<?php 
    class Update extends Database {

        public function UpdateData($id_student,$passwd,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$id_rec) {
            $this->statement = $this->connect->prepare("UPDATE student SET id_student = ?, passwd = ?, prename = ?, firstname = ?, lastname = ?, gender = ?, age = ?, address = ?, mobile = ?, email = ? WHERE id_rec = ?");
            $this->statement->bind_param("ssssssdsssd",$id_student,$passwd,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$id_rec);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }

    }
?>