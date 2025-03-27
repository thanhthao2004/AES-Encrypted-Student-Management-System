<?php 
    session_start();
    if(!isset($_SESSION['user'])) {
        header("Location: View/Login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="View/css/base.css">
    <link rel="stylesheet" href="View/css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Hệ thống quản lý sinh viên</title>
</head>
<body>
    <div class="container-fluid">
        <!-- Header -->
        <header class="container-fluild d-flex justify-content-center">
            <div class="row container d-flex align-items-center">
                <div class="col d-flex align-items-center">
                    <img src="View/img/logo-final.png" alt="Logo" width="80" height="80">
                    <p class="logo-name">uniman</p>
                </div>
                <div class="col d-flex align-items-center justify-content-around">
                    <div class="user d-flex align-items-center justify-content-between">
                        <i class="fa-solid fa-user"></i>
                        <p class="user-name">Nguyễn Thị Ngọc Bích</p>
                    </div>
                    <div class="notification">
                        <a href="index.php?act=logout"><i class="fa-solid fa-right-from-bracket"></i></a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main content -->
        <main class="container-fluid row">
            <!-- Sidebar -->
            <?php 
                include("View/Menu.php");
            ?>

            <?php 
                include("View/Section.php");
            ?>
        </main>
    </div>
</body>
</html>