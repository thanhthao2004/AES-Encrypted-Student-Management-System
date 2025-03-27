<?php 
    class clsStudent{
        public function addStudent($mssv, $hoTen, $ngaySinh, $gioiTinh, $lopDN) {
            $p = new clsConnect();
            $conn = $p->mOpen();

            // Kiểm tra xem MSSV đã tồn tại chưa
            $queryCheckmssv = "SELECT mssv FROM sinhvien WHERE mssv = '$mssv'";
            $resultCheck = $conn-> query($queryCheckmssv);
            if ($resultCheck->num_rows > 0) {
                return 2; // MSSV đã tồn tại
            } else{
                $queryAddStd = "INSERT INTO sinhvien (mssv, hoten, ngaysinh, gioitinh, lopdanhnghia) 
                                VALUES ('$mssv', '$hoTen', '$ngaySinh', '$gioiTinh', '$lopDN')";
                if($conn){ 
                    $resultAddstd = $conn->query($queryAddStd);
                    if($resultAddstd){
                        return 3; // Thêm SVSV thành công
                    }else{
                        return 4; // Lỗi khi thêm dữ liệu
                    }
                }else{
                    return 5; // Lỗi kết nối
                }
                $p ->mClose($conn);
            }
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
            if ($conn->query($query) === TRUE) {
                $p->mClose($conn);
                return 1; // Xóa thành công
            } else {
                $p->mClose($conn);
                return 0; // Lỗi CSDL
            }
        }
    }
?>