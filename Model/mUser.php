<?php
    include("mConnect.php");
    class mUser{
        public function login($userName, $password) {
            $queryLogin = "Select * from user where username= '$userName' and password='$password'";
            $p = new clsConnect();
            $conn = $p->mOpen();
            if($conn){
                return $conn->query($queryLogin);
            }else{
                return false;
            }
            $p ->mClose($conn);
        }

        public function register($stdName, $userName, $password) {
            $p = new clsConnect();
            $conn = $p->mOpen();
            $queryCheckUser = "Select username from user where username = '$userName'";
            $resultCheck = $conn ->query($queryCheckUser);
            if($resultCheck ->num_rows >0){
                return 2; // Tên đăng nhập đã tồn tại
            }else{
                $queryRegis = "Insert into user(hoten, username, password) Values ('$stdName','$userName','$password')";
                if($conn){ 
                    $resultRegis = $conn->query($queryRegis);
                    if($resultRegis){
                        return 3; // Đăng ký thành công
                    }else{
                        return 4; // Lỗi khi thêm dữ liệu
                    }
                }else{
                    return 5; // Lỗi kết nối
                }
                $p ->mClose($conn);
            }
        }
    }
?>