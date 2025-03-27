<?php 
    class clsConnect {
        public function mOpen() {
            $host = 'localhost';
            $userName = 'giangvien1';
            $password = 'giangvien123';
            $db = 'quanli';

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