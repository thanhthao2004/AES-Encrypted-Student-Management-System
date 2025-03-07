<?php 
    class clsConnect {
        public function mOpen() {
            $host = 'localhost';
            $userName = 'giangvien';
            $password = 'giangvien123';
            $db = 'quanlysinhvien';

            return mysqli_connect($host, $userName, $password, $db);
        }

        public function mClose($conn) {
            return $conn->close();
        }
    }
?>