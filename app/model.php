<?php

    class Model{

        private $db_host = 'localhost';
        private $db_user = 'root';
        private $db_pass = '';
        private $db_name = 'people-api';
        protected $conn;

        function __construct(){}

        protected function db_open(){
            try {
                $this->conn = new PDO("mysql: host=$this->db_host;dbname=$this->db_name;charset=utf8",$this->db_user,$this->db_pass);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        protected function db_close(){
            $this->conn = null;
        }

        function saveData($params = array()){
            try{
                $this->db_open();
                $query = "INSERT INTO people (gender, pronoun, name, lastname, email, dob, age, phone) 
                VALUES (:gender, :pronoun, :name, :lastname, :email, :dob, :age, :phone );";
                $stmt = $this->conn->prepare($query);
                $stmt->bindParam(':gender', $params['gender'],PDO::PARAM_STR);
                $stmt->bindParam(':pronoun', $params['pronoun'],PDO::PARAM_STR);
                $stmt->bindParam(':name', $params['name'],PDO::PARAM_STR);
                $stmt->bindParam(':lastname', $params['lastname'],PDO::PARAM_STR);
                $stmt->bindParam(':email', $params['email'],PDO::PARAM_STR);
                $stmt->bindParam(':dob', $params['dob'],PDO::PARAM_STR);
                $stmt->bindParam(':age', $params['age'],PDO::PARAM_STR);
                $stmt->bindParam(':phone', $params['phone'],PDO::PARAM_STR);
                $stmt->execute($params);
                $rows = $stmt->rowCount();
                $this->db_close();
                return $rows;
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }
        
        function getData(){
            try {
                $this->db_open();
                $query = "SELECT * FROM people";
                $stmt = $this->conn->prepare($query);
                $stmt->execute();
                $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $this->db_close();
                return $data;
            } catch (Exception $e) {
                echo  $e->getMessage();
            }
        }

    }

?>