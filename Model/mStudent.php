<?php 
    include_once('mConnect.php');
    class clsStudent{
        public function addStudent() {
        }

        public function updateStudent() {

        }

        public function insertStudent() {

        }
        public function getStudents() {
            $p = new clsConnect();
            $conn = $p->mOpen();
            $query = "SELECT * FROM sinhvien ORDER BY mssv";
            $result = $conn->query($query);
            $p->mClose($conn);
            return $result;
        }
        // Phương thức xóa sinh viên
        public function deleteStudent($mssv) {
            $p = new clsConnect();
            $conn = $p->mOpen(); // Mở kết nối
        
            // Kiểm tra xem sinh viên có tồn tại không
            $checkQuery = "SELECT mssv FROM sinhvien WHERE mssv = '$mssv'";
            $result = $conn->query($checkQuery);
        
            if ($result->num_rows == 0) {
                $p->mClose($conn);
                return 2; // MSSV không tồn tại
            }
        
            // Xóa sinh viên
            $query = "DELETE FROM sinhvien WHERE mssv = '$mssv'";
            if ($conn->query($query)) {
                $p->mClose($conn);
                return 1; // Xóa thành công
            } else {
                $p->mClose($conn);
                return 0; // Lỗi CSDL
            }
        }
    }
?>