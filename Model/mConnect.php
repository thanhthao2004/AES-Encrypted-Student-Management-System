<?php 
    class clsConnect {
        public function mOpen() {
            $host = 'localhost';
            $userName = 'giangvien';
            $password = 'giangvien123';
            $db = 'quanlysinhvien';

            $conn =  mysqli_connect($host, $userName, $password, $db);
            if (!$conn) {
                echo "Lỗi kết nối database: ";
            }
            return $conn;
        }

        public function mClose($conn) {
            return $conn->close();
        }
    }
?>