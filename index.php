

<?php
require_once "global.php";
require_once CONTROLLERS_URL . "AdminControllers.php";
$url =  isset($_GET['url']) ? $_GET['url'] : 'admin';

switch ($url) {
    case 'admin':  
        include "includes/admin/header.php";
        dashboard();
        include "includes/admin/footer.php";
 
        break;
    case 'admin/danhmuc':

        include "includes/admin/header.php";
        danhMuc();
        include "includes/admin/footer.php";

        break;
    case 'admin/danhmuc/them':

        include "includes/admin/header.php";
       themDanhMuc();
        include "includes/admin/footer.php";
        break;
    case 'admin/danhmuc/xoa':

        include "includes/admin/header.php";
        xoaDanhMuc();
        include "includes/admin/footer.php";

        break;
    case 'admin/danhmuc/sua':

        include "includes/admin/header.php";
        suaDanhMuc();
        include "includes/admin/footer.php";

        break;
    default:
        # code...
        break;
}