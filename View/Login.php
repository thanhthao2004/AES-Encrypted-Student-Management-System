<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập / Đăng ký</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #08183a;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .card {
            width: 400px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
        }
        .btn-warning {
            background-color: #fbc02d;
            border: none;
        }
        .btn-warning:hover {
            background-color: #e6a700;
        }
        .form-switch label {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="card">
        <h3 class="text-center text-dark fw-bold" id="form-title">Đăng nhập</h3>
        <form id="login-form">
            <div class="mb-3">
                <label class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-warning w-100 fw-bold">Đăng nhập</button>
            <p class="text-center mt-3">
                Chưa có tài khoản? <a href="#" class="text-primary fw-bold" id="toggle-form">Đăng ký</a>
            </p>
        </form>

        <form id="register-form" class="d-none">
            <div class="mb-3">
                <label class="form-label">Họ và Tên</label>
                <input type="text" class="form-control" placeholder="Nhập họ và tên" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Tên đăng nhập</label>
                <input type="text" class="form-control" placeholder="Nhập tên đăng nhập" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" required>
            </div>
            <button type="submit" class="btn btn-warning w-100 fw-bold">Đăng ký</button>
            <p class="text-center mt-3">
                Đã có tài khoản? <a href="#" class="text-primary fw-bold" id="toggle-form-back">Đăng nhập</a>
            </p>
        </form>
    </div>

    <script>
        document.getElementById('toggle-form').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('login-form').classList.add('d-none');
            document.getElementById('register-form').classList.remove('d-none');
            document.getElementById('form-title').innerText = "Đăng ký";
        });

        document.getElementById('toggle-form-back').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('register-form').classList.add('d-none');
            document.getElementById('login-form').classList.remove('d-none');
            document.getElementById('form-title').innerText = "Đăng nhập";
        });
    </script>
</body>
</html>
