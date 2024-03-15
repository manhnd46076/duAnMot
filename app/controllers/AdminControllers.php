

<?php
require_once MODELS_URL . "LoaiModel.php";
require_once MODELS_URL . "DanhMucModel.php";
function dashboard()
{
    include VIEWS_URL . "admin/dasboard/index.php";
}
function danhMuc()
{
    $listDanhMuc = getAllDanhMuc();
    include VIEWS_URL . "admin/danhmuc/index.php";
}
function themDanhMuc()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ten_danh_muc = $_POST['ten_danh_muc'];
        $ma_loai = $_POST['ma_loai'];
        $erros = [];
        if (empty($erros)) {
            insertDanhMuc($ma_loai, $ten_danh_muc);
            $tbao = "Thêm danh mục thành công";
            header("location:?url=admin/danhmuc&tb=$tbao");
        } else {
            $tbao = "lỗi";
            $erros['loi_danhmuc'] = "Tên danh mục trùng";
        }
    }
    $listLoai = getAllLoai();
    // debug($listLoai);
    include VIEWS_URL . "admin/danhmuc/them.php";
}
function xoaDanhMuc()
{
    $ma_danh_muc = $_GET['ma_danh_muc'];
    if (deleteDanhMuc($ma_danh_muc)) {
        $tbao = "Xóa thành công";
        header("location: ?url=admin/danhmuc&tb=$tbao");
    } else {
        $tbao = "Xóa  không thành công";
        header("location: ?url=admin/danhmuc&tb=$tbao");
    }
}
function suaDanhmuc()
{
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $ma_danh_muc = $_GET['ma_danh_muc'];
        $ten_danh_muc = $_POST['ten_danh_muc'];
        $ma_loai = $_POST['ma_loai'];
        $erros = [];
        if (empty($ten_danh_muc)) {
            $erros['ten_danh_muc'] = "Mời nhập tên danh mục";
        }
        if (empty($ma_loai)) {
            $erros['ma_loai'] = "Mời chọn loại ";
        }
        if (empty($erros)) {
            updateDanhMuc($ma_danh_muc, $ten_danh_muc, $ma_loai);
            $tbao = "Cập nhật danh mục thành công";
            header("location: ?url=admin/danhmuc&tb=$tbao");
        } else {
            $tbao = "Cập nhật thất bại";
            header("location: ?url=admin/danhmuc&tb=$tbao");
        }
    }
    $ma_danh_muc = $_GET['ma_danh_muc'];
    $danhMucID = getDanhMucID($ma_danh_muc);
    $listLoai = getAllLoai();
    include VIEWS_URL . "admin/danhmuc/sua.php";
}
