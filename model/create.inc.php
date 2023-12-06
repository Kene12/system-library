<?php
    class Create extends Database {
        /*
        public function createData($symbol,$buy,$sell,$total,$net){
            $this->statement=$this->connect->prepare("INSERT INTO trading_data_by_stock (symbol,buy,sell,total,net) VALUES (?, ?, ?, ?, ?)");
            $this->statement->bind_param("sdddd",$symbol,$buy,$sell,$total,$net);

            if($this->statement->execute()){
                return true;
            } else{
                return FALSE;
            }
        }
        */
        public function createPicture($id_book,$name,$path){
            $this->statement=$this->connect->prepare("INSERT INTO picture (id_book,name,path) VALUES (?, ?, ?) ");
            $this->statement->bind_param("iss",$id_book,$name,$path);
            $this->statement->execute();
        }

        public function createLoing($username,$password,$fname,$lname,$gender,$prename,$address,$mobile,$email,$age,$admin){
            $this->statement=$this->connect->prepare("INSERT INTO student (id_student,passwd,firstname,lastname,gender,prename,address,mobile,email,age,type_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $this->statement->bind_param("sssssssssdi",$username,$password,$fname,$lname,$gender,$prename,$address,$mobile,$email,$age,$admin);

            if($this->statement->execute()){
                return true;
            } else{
                return FALSE;
            }
        }
        public function createBook($bookname,$author,$publisher,$price,$stu,$ter){
            $this->statement=$this->connect->prepare("INSERT INTO book (bookname,author,publisher,price,stu,ter) VALUES (?, ?, ?, ?,?, ?)");
            $this->statement->bind_param("sssiii",$bookname,$author,$publisher,$price,$stu,$ter);

            if($this->statement->execute()){
                return true;
            } else{
                return FALSE;
            }
        }
        public function createBorrow($id_rec,$id_book,$lender){
            
            $this->statement=$this->connect->prepare("INSERT INTO borrow (id_rec,id_book,lender) VALUES (?, ?, ?)");
            $this->statement->bind_param("iis",$id_rec,$id_book,$lender);
            
            if($this->statement->execute()){
                return true;
            } else{
                return FALSE;
            }
        }
        public function createreturnn($id_rec,$id_book,$id_borrow,$tomorrow,$null){
            $this->returnTime=$this->connect->prepare("INSERT INTO returnn (id_rec,id_book,id_borrow,borrow_time,returnn_time) VALUES (?, ?, ? , ?,?)");
            $this->returnTime->bind_param("iiiss",$id_rec,$id_book,$id_borrow,$tomorrow,$null);

            if($this->returnTime->execute()){
                return true;
            } else{
                return FALSE;
            }
        }
        public function createreturnn22($id_rec,$id_book,$id_borrow,$receiver,$tomorrow){
            $this->returnTime=$this->connect->prepare("INSERT INTO returnn (id_rec,id_book,id_borrow,borrow_time,receiver,returnn_time) VALUES (?, ?, ?,? , ?,?)");
            $this->returnTime->bind_param("iiiss",$id_rec,$id_book,$id_borrow,$receiver,$tomorrow);

            if($this->returnTime->execute()){
                return true;
            } else{
                return FALSE;
            }
        }
    }


?>