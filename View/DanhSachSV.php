<style>
    .content {
        /*margin-left: 260px; */
        padding: 20px;
    }

    .table th, .table td {
        text-align: center;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
        padding: 6px; 
        font-size: 15px;
    }

    .btn-action {
        background-color: #ffc107;
        color: black;
        border: none;
        font-size: 15px;
        padding: 4px 8px;
        border-radius: 5px;
    }

    .serach-input input,.serach-input button {
        font-size: 1.2rem;
    }

    form {
        margin: 0 6px;
    }
</style>

<!-- Main Content -->
<div class="content col-10">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <!-- Ô tìm kiếm và lọc lớp bên trái -->
        <form action="" method="POST" name="formSearchSV" class="serach-input d-flex me-3">
            <input type="text" class="form-control w-50 me-2" placeholder="Tìm kiếm Sinh viên">
            <button class="btn btn-outline-secondary btn-sm">Lọc theo lớp</button>
        </form>
    
        <!-- Các nút bên phải với khoảng cách đều -->
        <div class="d-flex gap-2">
            <form action="index.php" method="GET" name="formAddSV">
                <input type="hidden" name="act" value="themSV">
                <button class="btn btn-warning btn-action btn-sm">+ Thêm SV</button>
            </form>
            <button class="btn btn-warning btn-action btn-sm">📂 Xuất File</button>
        </div>
    </div>

    <h2 class="text-center mb-3"><b>DANH SÁCH SINH VIÊN</b></h2>
    <!-- Bảng danh sách sinh viên -->
    <table class="table table-bordered">
        <thead class="table-secondary">
            <tr>
                <th>STT</th>
                <th>MSSV</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Lớp danh nghĩa</th>
                <th>Điểm số</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>22632991</td>
                <td>Trần Thị Mỹ Hạnh</td>
                <td>29/10/2004</td>
                <td>Nữ</td>
                <td>DHTTT18ATT</td>
                <td>8.0</td>
                <td style="display: flex; align-items: center; justify-content: center;">
                    <form action="index.php" method="GET" name="formXemTTCTSV">
                        <input type="hidden" name="act" value="xemTTCT">
                        <button class="btn btn-primary btn-action"><i class="fa-solid fa-eye"></i></button>
                    </form>
                    <form action="index.php" method="GET" name="formChinhSuaSV">
                        <input type="hidden" name="act" value="chinhSuaSV">
                        <button class="btn btn-primary btn-action"><i class="fa-solid fa-pen"></i></button>
                    </form>
                    <form action="index.php" method="GET" name="formXoaSV">
                        <input type="hidden" name="act" value="xoaSV">
                        <button class="btn btn-primary btn-action" data-bs-toggle="modal" data-bs-target="#confirmModal"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Modal Bạn có chắc chắn xóa thông tin không-->
<div class="modal fade" id="confirmModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 justify-content-center">
                <h5 class="modal-title fw-bold">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <p class="fw-bold">Bạn có chắc chắn xóa thông tin không?</p>
            </div>
            <div class="modal-footer justify-content-around justify-content-center">
                <button type="button" class="btn btn-outline-warning btn-lg btn-custom-large" data-bs-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-warning btn-lg btn-custom-large" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#xoaTC">Xác nhận</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Thông báo xóa thành công-->
<div class="modal fade" id="xoaTC" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 justify-content-center">
                <h5 class="modal-title fw-bold">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                    <p class="fw-bold">Xóa thành công</p>
            </div>
        </div>
    </div>
</div>

<!-- Modal Lỗi! Không thể xóa-->
<div class="modal fade" id="Loixoa" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-0 justify-content-center">
                <h5 class="modal-title fw-bold">Thông báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                    <p class="fw-bold">Lỗi! Không thể xóa</p>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
