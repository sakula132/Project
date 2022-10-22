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

        public function insert($mem_number, $username, $mem_name, $mem_lname, $mem_age) {
            $result = mysqli_query($this->dbcon, "INSERT INTO member (mem_number, username, mem_name, mem_lname, mem_age) VALUES('$mem_number', '$username', '$mem_name', '$mem_lname', '$mem_age')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM member ");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM member  WHERE mem_id = '$userid'");
            return $result;
        }

        public function update($mem_number, $username, $mem_name, $mem_lname, $mem_age, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE member  SET 
                mem_number = '$mem_number',
                username = '$username',
                mem_name = '$mem_name',
                mem_lname = '$mem_lname',
                mem_age = '$mem_age'
                WHERE mem_id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM member  WHERE mem_id = '$userid'");
            return $deleterecord;
        }

    }
    

?>