<?php
require_once __DIR__ . '/../commons/env.php';
require_once __DIR__ . '/../commons/connect.php';
require_once __DIR__ . '/../controllers/productController.php';
require_once __DIR__ . '/../controllers/categoryController.php';
require_once __DIR__ . '/../models/product.php';
require_once __DIR__ . '/../models/category.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$act = $_GET['act'] ?? '';
$page = $_GET['page'] ?? '';
$id = $_GET['id'] ?? '';

$productController = new ProductController();
$categoryController = new CategoryController();

switch ($act) {
    case 'sanpham':

        switch ($page) {
            case 'them':
                require 'modules/sanpham/add.php';
                break;

            case 'sua':
                $productController->edit();
                break;

            case 'update':
                $productController->update();
                break;

            case 'xoa':
                $productController->delete();
                break;

            default:
                echo "Không tìm thấy trang!";
                break;
        }
        break;

    case 'danhmuc':
        switch ($page) {
            case 'list':
                $categoryController->getList();
                break;

            case 'add':
                $categoryController->addCategory();
                break;

            case 'edit':
                $categoryController->editCategory();
                break;

            case 'update':
                $categoryController->updateCategory();
                break;

            case 'delete':
                $categoryController->deleteCategory();
                break;

            default:
                echo "Không tìm thấy trang!";
                break;
        }
        break;

    default:
        echo "Module không hợp lệ";
        break;
}
?>