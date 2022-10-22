<?php 

    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'project');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($employee_card, $username, $employee_lname, $employee_age, $employee_tel, $type, $password) {
            $result = mysqli_query($this->dbcon, "INSERT INTO employee (employee_card, username, employee_lname, employee_age, employee_tel, type, password) VALUES('$employee_card', '$username', '$employee_lname', '$employee_age', '$employee_tel', '$type', '$password')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee ");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM employee  WHERE mem_id = '$userid'");
            return $result;
        }

        public function update($employee_card, $username, $employee_lname, $employee_age, $employee_tel, $type, $password, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE employee  SET
                employee_card = '$employee_card',
                username = '$username',
                employee_lname = '$employee_lname',
                employee_age = '$employee_age',
                employee_tel = '$employee_tel',
                type = '$type',
                password = '$password'
                
                WHERE employee_id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM employee  WHERE employee_id = '$userid'");
            return $deleterecord;
        }

    }
    

?>