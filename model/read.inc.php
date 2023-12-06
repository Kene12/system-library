<?php 
    class Read extends Database {
        public function readDataAll() {
            $this->statement = $this->connect->prepare("SELECT * FROM student WHERE type_id = 2 or type_id = 3");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_rec']."</td>
                        <td>".$row['id_student']."</td>
                        <td>".$row['passwd']."</td>
                        <td>".$row['prename']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['mobile']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['type_id']."</td>
                        <td>
                            <a href='def/edit.php?id=".$row['id_rec']."'><button>Edit</button></a>
                            <a href='def/delete.php?id=".$row['id_rec']."'><button>Delete</button></a>
                        </td>
                    </tr>
                ";
            }
        }
        public function readDataAll1() {
            $this->statement = $this->connect->prepare("SELECT * FROM student WHERE type_id = 1");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_rec']."</td>
                        <td>".$row['id_student']."</td>
                        <td>".$row['passwd']."</td>
                        <td>".$row['prename']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['age']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['mobile']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['type_id']."</td>
                        <td>
                            <a href='def/edit.php?id=".$row['id_rec']."'><button>Edit</button></a>
                            <a href='def/deleteadmin.php?id=".$row['id_rec']."'><button>Delete</button></a>
                        </td>
                    </tr>
                ";
            }
        }
        public function readBorrow() {
            $this->statement = $this->connect->prepare("SELECT * FROM book,borrow,student Where student.id_rec = borrow.id_rec and book.id_book = borrow.id_book" );
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_rec']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['id_book']."</td>
                        <td>".$row['bookname']."</td>
                        <td>".$row['lender']."</td>
                        <td>".$row['borrow_time']."</td>
                        <td>
                            <a href='def/editborrow.php?id=".$row['id_borrow']."'><button>Edit</button></a>
                            <a href='def/deleteborrow.php?id=".$row['id_borrow']."'><button>Delete</button></a>
                        </td>
                    </tr>
                ";
            }
        }
        public function readreturnn() {
            $this->statement = $this->connect->prepare("SELECT * FROM book,student,returnn Where student.id_rec = returnn.id_rec and book.id_book = returnn.id_book");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_returnn']."</td>
                        <td>".$row['id_book']."</td>
                        <td>".$row['bookname']."</td>
                        <td>".$row['id_rec']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['id_borrow']."</td>
                        <td>".$row['receiver']."</td>
                        <td>".$row['returnn_time']."</td>
                        <td>".$row['borrow_time']."</td>
                        <td>
                            <a href='def/verify.php?id=".$row['id_book']."'><button>ยืนยันคืน</button></a>
                            <a href='def/editreturnn.php?id=".$row['id_returnn']."'><button>Edit</button></a>
                            <a href='def/deletereturnn.php?id=".$row['id_returnn']."'><button>Delete</button></a>
                        </td>
                    </tr>
                ";
            }
        }
        public function readBook() {
            $this->statement = $this->connect->prepare("SELECT * FROM book ");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_book']."</td>
                        <td>".$row['bookname']."</td>
                        <td>".$row['author']."</td>
                        <td>".$row['publisher']."</td>
                        <td>".$row['price']."</td>
                        <td>
                            <a href='def/editbook.php?id=".$row['id_book']."'><button>Edit</button></a>
                            <a href='def/deletebook.php?id=".$row['id_book']."'><button>Delete</button></a>
                        </td>
                    </tr>
                ";
            }
        }
        public function readBooks() {
            $this->statement = $this->connect->prepare("SELECT * FROM book ");
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_book']."</td>
                        <td>".$row['bookname']."</td>
                        <td>".$row['author']."</td>
                        <td>".$row['publisher']."</td>
                        <td>".$row['price']."</td>
                    </tr>
                ";
            }
        }
        public function readreturnr2($id_book) {
            $this->statement = $this->connect->prepare("SELECT * FROM student,borrow,book WHERE book.id_book = ?");
            $this->statement->bind_param("i",$id_book);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $borrow_date = $row['borrow_date'];
                $id_book = $row['id_book'];
                $bookname = $row['bookname'];
            }
            return array($borrow_date,$id_book,$bookname);
        }
        public function readBorrow1($id_rec,$id_book) {
            $this->statement = $this->connect->prepare("SELECT * FROM student,borrow,book WHERE student.id_rec = ? and book.id_book = ?");
            $this->statement->bind_param("ii",$id_rec,$id_book);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id_borrow = $row['id_borrow'];
                $type_id = $row['type_id'];
                $stu = $row['stu'];
                $ter = $row['ter'];
                $borrow_date = $row['borrow_time'];
            }
            return array($id_borrow,$type_id,$stu,$ter,$borrow_date);
        }
        
        public function readreturnr($id_book) {
            $this->statement = $this->connect->prepare("SELECT * FROM student,borrow,book,returnn WHERE book.id_book = ?");
            $this->statement->bind_param("i",$id_book);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $borrow_time = $row['borrow_time'];
                $id_book = $row['id_book'];
                $bookname = $row['bookname'];
                $id_returnn = $row['id_returnn'];
            }
            return array($borrow_time,$id_book,$bookname,$id_returnn);
        }
        public function readreturnn3($id_returnn) {
            $this->statement = $this->connect->prepare("SELECT * FROM returnn WHERE id_returnn = ?");
            $this->statement->bind_param("i",$id_returnn);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id_returnn = $row['id_returnn'];
                $id_borrow = $row['id_borrow'];
                $id_book = $row['id_book'];
                $id_rec = $row['id_rec'];
                $receiver = $row['receiver'];
            }
            return array($id_returnn,$id_borrow,$id_book,$id_rec,$receiver);
        }
        public function readBorrowr($id_borrow) {
            $this->statement = $this->connect->prepare("SELECT * FROM borrow WHERE id_borrow = ?");
            $this->statement->bind_param("i",$id_borrow);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id_book = $row['id_book'];
                $lender = $row['lender'];
                $id_rec = $row['id_rec'];
                $id_borrow = $row['id_borrow'];
            }
            return array($id_book,$lender,$id_rec,$id_borrow);
        }
        public function readBorrowc($id_rec,$id_book) {
            $this->statement = $this->connect->prepare("SELECT * FROM student,borrow,book WHERE student.id_rec = ? and book.id_book = ?");
            $this->statement->bind_param("ii",$id_rec,$id_book);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $statuss = $row['statuss'];
            }
            return array($statuss);
        }
        public function searchBook($id_book) {
            $this->statement = $this->connect->prepare("SELECT * FROM book,borrow,returnn WHERE id_book = ?");
            $this->statement->bind_param('i', $id_book);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id = $row['id_rec'];
                $username = $row['id_student'];
                $password = $row['passwd'];
                $prename = $row['prename'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $gender = $row['gender'];
                $age = $row['age'];
                $address = $row['address'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $type_id = $row['type_id'];
            }
            return array($id,$username,$password,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$type_id);
        }
        public function readBookdata($id) {
            $this->statement = $this->connect->prepare("SELECT * FROM book WHERE id_book = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id = $row['id_book'];
                $bookname = $row['bookname'];
                $author = $row['author'];
                $publisher = $row['publisher'];
                $price = $row['price'];
                $stu = $row['stu'];
                $ter = $row['ter'];
            }
            return array($id,$bookname,$author,$publisher,$price,$stu,$ter);
        }
        public function readData($id) {
            $this->statement = $this->connect->prepare("SELECT * FROM student WHERE id_rec = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id = $row['id_rec'];
                $username = $row['id_student'];
                $password = $row['passwd'];
                $prename = $row['prename'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $gender = $row['gender'];
                $age = $row['age'];
                $address = $row['address'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $type_id = $row['type_id'];
            }
            return array($id,$username,$password,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$type_id);
        }


        public function readPicture($id) {
            $this->statement = $this->connect->prepare("SELECT * FROM picture WHERE id_book = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_assoc();
            if(!$data){
                return array(NULL, NULL, NULL,NULL);
            }else{
                return array($data['id'], $data['id_book'], $data['name'],$data['path']);
                
            }
            
        }
        public function readSearch($bookname) {
            $this->statement = $this->connect->prepare("SELECT * FROM book WHERE bookname = ?");
            $this->statement->bind_param('s', $bookname);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_assoc();
            if(!$data){
                return array(NULL, NULL, NULL,NULL,NULL);
            }else{
                return array($data['id_book'], $data['bookname'], $data['author'],$data['publisher'],$data['price']);
                
            }
            
        }

        public function readLogin($username) {

            $this->statement = $this->connect->prepare("SELECT * FROM student WHERE id_student = ?");
            $this->statement->bind_param('s', $username);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_assoc();
            if(!$data){
                return array(NULL, NULL, NULL, NULL);
            }else{
                return array($data['id_student'], $data['passwd'], $data['type_id'], $data['id_rec']);
            }
            
        }
        public function readid($id) {
            $this->statement = $this->connect->prepare("SELECT * FROM student WHERE id_rec = ?");
            $this->statement->bind_param('i', $id);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                $id = $row['id_rec'];
                $username = $row['id_student'];
                $password = $row['passwd'];
                $prename = $row['prename'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $gender = $row['gender'];
                $age = $row['age'];
                $address = $row['address'];
                $mobile = $row['mobile'];
                $email = $row['email'];
                $type_id = $row['type_id'];
            }
            return array($id,$username,$password,$prename,$firstname,$lastname,$gender,$age,$address,$mobile,$email,$type_id);
        }
        public function readBookbr($id_book) {
            $this->statement = $this->connect->prepare("SELECT * FROM book,borrow,student,returnn WHERE book.id_book = ? and book.id_book = borrow.id_book and book.id_book = returnn.id_book and borrow.id_rec = student.id_rec");
            $this->statement->bind_param('i', $id_book);
            $this->statement->execute();
            $data = $this->statement->get_result()->fetch_all(MYSQLI_ASSOC);
            foreach ($data as $row) {
                echo "
                    <tr>
                        <td>".$row['id_book']."</td>
                        <td>".$row['bookname']."</td>
                        <td>".$row['id_rec']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['statuss']."</td>
                    </tr>
                ";
            }
        }

    }
?>