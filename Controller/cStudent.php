<?php 
    include_once('Model/mStudent.php');
    class cStudent{
        public function addStudent() {
        }
        public function updateStudent() {

        }

        public function insertStudent() {

        }
        public function getStudents() {
            $p = new clsStudent();
            return $p->getStudents(); // Lấy danh sách sinh viên từ Model
        }
        public function deleteStudent($mssv) {
            $p = new clsStudent();
            $result = $p->deleteStudent($mssv);
        
            if ($result == 1) {
                echo "<script>
                showAlert('Xóa sinh viên thành công!', 'warning');
                setTimeout(2000);
            </script>"; // Xóa thành công
            header('Location: index.php');
            } else {
                header("Location: index.php?act=danhSachSV&status=error_db"); // Lỗi CSDL
            }
            exit();
        }
        
}
?>