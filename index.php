<?php
    require './commons/connect.php';
    require './commons/env.php';
    include "./client/views/layout/header.php";
    $act = isset($_GET['act']) ? $_GET['act'] : '/';

switch ($act) {
    case '/':
        echo "Home";
        break;
    case '/products':
        echo "Products";
        break;

    default:
        echo "Router không hợp lệ";
        break;
    
}
include "./client/views/layout/footer.php";    
?>