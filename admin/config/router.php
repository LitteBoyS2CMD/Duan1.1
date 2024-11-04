<?php
$act = $_GET['act'] ?? '';
echo $act;
if (!empty($act)) {
    switch ($act) {
        case "sanpham":
            $page = $_GET['page'] ?? '';
            $id = $_GET['id'] ?? '';
            if (!empty($page) && $page === 'them') {
                if(sizeof($_POST) === 0){
                    require 'modules/products/form.php';
                }else{
                    
                }
            } else if (!empty($page) && $page === 'sua' && !empty($id)) {
                if (sizeof($_POST) === 0) {
                    require 'modules/products/form.php';
                } else {
                    echo "Sửa data";
                }
            } else if (!empty($page) && $page === 'xoa' && !empty($id)) {
                echo "Complete require xoa !";
            } else {
                require 'modules/products/index.php';
            }
            break;

        case 'baiviet':

            break;
        default:

            break;
    }
} else {
}
// require "modules/products/index.php";
