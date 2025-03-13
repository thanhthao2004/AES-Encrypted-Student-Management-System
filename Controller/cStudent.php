<?php 
    class cStudent{
        public function addStudent($mssv, $hoTen, $ngaySinh, $gioiTinh, $lopDN) {
            $p = new clsStudent();
            $tblSinhvien = $p->addStudent($mssv, $hoTen, $ngaySinh, $gioiTinh, $lopDN);
            if($tblSinhvien == 2){
                header("Location: index.php?act=themSV&status=exist");// MSSV đã tồn tại
            } else if($tblSinhvien == 5){
                // echo "<script>alert('Lỗi kết nối!')</script>";
                header("Location: index.php?act=themSV&status=error_db");
            }
            else if($tblSinhvien == 3){
                header("Location: index.php?act=themSV&status=success");// Thêm SV thành công
            } else {
                // echo "<script>alert('Không thể thêm sinh viên!')</script>";
                header("Location: index.php?act=themSV&status=fail");// Không thể thêm SV
            }
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
                header("Location: index.php?act=danhSachSV&status=success"); // Xóa thành công
            } else if ($result == 2) {
                header("Location: index.php?act=danhSachSV&status=not_exist"); // MSSV không tồn tại
            } else {
                header("Location: index.php?act=danhSachSV&status=error_db"); // Lỗi CSDL
            }
            exit();
        }
        
}
?>