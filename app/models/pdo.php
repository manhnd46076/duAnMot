<?php
require_once "env.php";

function getConnect()
{
    try {
        $connect = new PDO(
            "mysql:host=" . DB_HOST .
                ";dbname=" . DB_DATABASE .
                ";charset=" . DB_CHARSET,
            DB_USERNAME,
            DB_PASSWORD
        );
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
        // echo "kết nối thành công";
        // die;
    } catch (PDOException $e) {
        echo "Loi ket noi den database " . $e->getMessage();
    }
}

function executeCommand($sql)
{
    try {
        $connect = getConnect();
        $stmt = $connect->prepare($sql);
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    } finally {
        unset($connect);
    }
}


function getData($sql, $getAll = true)
{
    try {
        $connect = getConnect();
        $stmt = $connect->prepare($sql);
        $stmt->execute();
    } catch (PDOException $e) {
        echo "Kiểm tra câu lệnh SQL";
    } finally {
        unset($connect);
    }
    if ($getAll) {
        return $stmt->fetchAll();
    } else {
        return $stmt->fetch();
    }
}

if (!function_exists('debug')) { // tạo hàm debug thực ra là in dữ liệu ra để quan sát
    function debug($data){
        echo "<pre>";
        print_r($data);
        die;
    }
}
