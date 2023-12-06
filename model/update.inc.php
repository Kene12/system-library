<?php 
    class Update extends Database {

        public function Updatebook($id,$bookname,$author,$publisher,$price,$stu,$ter) {
            $this->statement = $this->connect->prepare("UPDATE book SET bookname = ?, author = ?, publisher = ?, price = ?, stu = ?, ter = ? WHERE id_book = ?");
            $this->statement->bind_param("sssiiii",$bookname,$author,$publisher,$price,$stu,$ter,$id);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function UpdateData($id_student,$passwd,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$type_id,$id_rec) {
            $this->statement = $this->connect->prepare("UPDATE student SET id_student = ?, passwd = ?, prename = ?, firstname = ?, lastname = ?, gender = ?, age = ?, address = ?, mobile = ?, email = ?, type_id = ? WHERE id_rec = ?");
            $this->statement->bind_param("ssssssdsssid",$id_student,$passwd,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$type_id,$id_rec);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function UpdateSbook($status,$id_book) {
            $this->statement = $this->connect->prepare("UPDATE book SET statuss = ? WHERE id_book = ?");
            $this->statement->bind_param("si",$status,$id_book);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function Updatere($id_borrow,$id_book,$lender,$id_rec) {
            $this->statement = $this->connect->prepare("UPDATE borrow SET id_book = ?, lender = ?, id_rec = ? WHERE id_borrow = ?");
            $this->statement->bind_param("isii",$id_book,$lender,$id_rec,$id_borrow);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function UpdateBor($id,$id_book,$lender,$id_rec) {
            $this->statement = $this->connect->prepare("UPDATE borrow SET id_book = ?, lender= ?, id_rec=? WHERE id_borrow = ?");
            $this->statement->bind_param("isii",$id_book,$lender,$id_rec,$id);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function Updatereturn($time,$id,$receiver) {
            $this->statement = $this->connect->prepare("UPDATE returnn SET receiver = ?,returnn_time = ? WHERE id_returnn = ?");
            $this->statement->bind_param("ssi",$receiver,$time,$id);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function UpdatereturnW($id,$receiver,$id_rec,$id_book) {
            $this->statement = $this->connect->prepare("UPDATE returnn SET receiver = ?,id_rec = ?,id_book = ? WHERE id_returnn = ?");
            $this->statement->bind_param("siii",$receiver,$id_rec,$id_book,$id);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }
        public function Updatereturn2($id,$lender,$id_rec) {
            $this->statement = $this->connect->prepare("UPDATE book SET statuss = ? WHERE id_book = ?");
            $this->statement->bind_param("si",$status,$id_book);
            
            if ($this->statement->execute()) {
                return true;
            } else {
                return false;
            }
        }

    }
?>