<?php
    class Database{
        protected $host;
        protected $user;
        protected $passwd;
        protected $database;
        protected $character;
        protected $connect;
        protected $statement;

        public function __construct(){
            $this->host="localhost";
            $this->user="root";
            $this->passwd="";
            $this->database="lpc";
            $this->character="utf8mb4";
            $this->connect=new mysqli($this->host,$this->user,$this->passwd,$this->database);
            $this->connect->set_charset($this->character);
        }
        /*
        public function __destruct(){
            $this->statement->close();
            $this->connect->close();
        }
        */
    }


?>