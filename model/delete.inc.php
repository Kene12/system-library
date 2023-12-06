<?php
    class Delete extends Database{
        public function deleteData($id){
            $this->statement=$this->connect->prepare("DELETE FROM student WHERE id_rec = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
        }
        public function deleteBook($id){
            $this->statement=$this->connect->prepare("DELETE FROM book WHERE id_book = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
        }
        public function deletePicture($id){
            $this->statement=$this->connect->prepare("DELETE FROM picture WHERE idcom = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
        }
        public function deleteborrow($id){
            $this->statement=$this->connect->prepare("DELETE FROM borrow WHERE id_borrow = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
        }
        public function deletereturnn($id){
            $this->statement=$this->connect->prepare("DELETE FROM returnn WHERE id_returnn = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
        }
        public function deleteFile($name,$path){
            $target = $path.$name;
            return unlink($target);
        }
        public function checkFile($name,$path){
            $target = $path.$name;
            return file_exists($target);
        }
    }
    
?>