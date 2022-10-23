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

        public function insert($price_number, $unit, $price) {
            $result = mysqli_query($this->dbcon, "INSERT INTO price (price_number, unit, price) VALUES('$price_number', '$unit', '$price')");
            return $result;
        }

        public function fetchdata() {
            $result = mysqli_query($this->dbcon, "SELECT * FROM price ");
            return $result;
        }

        public function fetchonerecord($userid) {
            $result = mysqli_query($this->dbcon, "SELECT * FROM price  WHERE price_id = '$userid'");
            return $result;
        }

        public function update($price_number, $unit, $price, $userid) {
            $result = mysqli_query($this->dbcon, "UPDATE price  SET
                price_number = '$price_number',
                unit = '$unit',
                price = '$price'

                WHERE price_id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) {
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM price WHERE price_id = '$userid'");
            return $deleterecord;
        }

    }
    

?>