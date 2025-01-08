<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .form-container {
            width: 60%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .form-label {
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>CHỈNH SỬA THÔNG TIN SINH VIÊN</h2>
        <form>
            <div class="row mb-3">
                <label for="student-id" class="col-sm-4 col-form-label">Mã số sinh viên</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="stdid" name="txtstd" >
                </div>
            </div>
            <div class="row mb-3">
                <label for="student-name" class="col-sm-4 col-form-label">Họ và tên sinh viên</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="nameid" name="txtname" placeholder="Nguyễn Văn Anh">
                </div>
            </div>
            <div class="row mb-3">
                <label for="student-dob" class="col-sm-4 col-form-label">Ngày sinh sinh viên</label>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="dobid" name="ddob">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-4 col-form-label">Giới tính sinh viên</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Nam" checked>
                        <label class="form-check-label" for="male">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Nữ">
                        <label class="form-check-label" for="female">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <label for="student-class" class="col-sm-4 col-form-label">Lớp danh nghĩa</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="classid" name="txtclass" >
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-sm-4 d-flex justify-content-end gap-3">
                    <button type="reset" class="btn btn-warning" style="corlor: #08183a">Đặt lại</button>
                    <button type="submit" class="btn btn-warning" style=" corlor: #08183a; border: none;">Lưu lại</button>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
