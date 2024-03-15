
<?php
require_once "pdo.php";

function getAllDanhMuc(){
    $sql = "SELECT A.*, B.ten_loai FROM danh_muc A JOIN loai B ON A.ma_loai = B.ma_loai";
    return getData($sql);
}

function insertDanhMuc($ma_loai,$ten_danh_muc){
 $sql = "INSERT INTO danh_muc VALUES (NULL,'$ten_danh_muc','$ma_loai')";
return executeCommand($sql);
}

function deleteDanhMuc($ma_danh_muc){
    $sql = "DELETE FROM danh_muc WHERE ma_danh_muc = $ma_danh_muc";
    return executeCommand($sql);
}
function getDanhMucID($ma_danh_muc){
    $sql = "SELECT * FROM danh_muc WHERE ma_danh_muc = $ma_danh_muc";
    return getData($sql, false);
}

function updateDanhMuc($ma_danh_muc,$ten_danh_muc,$ma_loai){
    $sql = "UPDATE danh_muc SET ten_danh_muc = '$ten_danh_muc', ma_loai = $ma_loai WHERE ma_danh_muc = $ma_danh_muc ";
    return executeCommand($sql);
}

// $sql = "INSERT INTO danh_muc VALUES (NULL,'$ten_danh_muc','$ma_loai')";
// return executeCommand($sql);

// $sql = " INSERT INTO danh_muc (ten_danh_muc, ma_loai)
// SELECT '$ten_danh_muc', ma_loai
// FROM loai
// WHERE ma_loai IN ('$ma_loai', '$ma_loai')";