<?php
    $activePage = isset($_GET['act']) ? $_GET['act'] : 'danhSachSV'; // Mặc định là danhSachSV
?>
<!-- Sidebar -->
<div class="sidebar col-2" id="sidebar">
    <div class="brand">Nguyen Thi Ngoc Bich</div>

    <a href="index.php?act=danhSachSV" class="menu-item <?php echo ($activePage == 'danhSachSV') ? 'active' : ''; ?>">
        <i class="fa-solid fa-list"></i> Danh sách sinh viên
    </a>
    <a href="index.php?act=themSV" class="menu-item <?php echo ($activePage == 'themSV') ? 'active' : ''; ?>">
        <i class="fa-solid fa-user-plus"></i> Thêm sinh viên
    </a>
    <a href="index.php?act=chinhSuaSV" class="menu-item <?php echo ($activePage == 'chinhSuaSV') ? 'active' : ''; ?>">
        <i class="fa-solid fa-user-pen"></i> Chỉnh sửa thông tin 
    </a>
</div>