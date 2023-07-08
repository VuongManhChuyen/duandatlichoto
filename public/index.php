<?php
namespace App;
use App\Controller\AdminController;
use App\Controller\ProductController;
use App\Controller\TaikhoanController;
use App\Router;
require_once __DIR__ . "/../vendor/autoload.php";

$router = new Router();
session_start();
if(isset($_SESSION["auth"]) && $_SESSION["auth"]->role==1){
Router::get('/admin', [AdminController::class, 'index']);
// Danh Mục
Router::get('/danhmuc', [AdminController::class, 'listdm']);
Router::get('/add-danhmuc', [AdminController::class, 'createdm']);
Router::post('/add-danhmuc', [AdminController::class, 'adddm']);
Router::get('/delete-danhmuc', [AdminController::class, 'deletedm']);
Router::get('/update-danhmuc', [AdminController::class, 'onedm']);
Router::post('/update-danhmuc', [AdminController::class, 'updatedm']);
// Sản Phẩm
Router::get('/sanpham',[ProductController::class,'listsp']);
Router::get('/add-sanpham',[ProductController::class,'createsp']);
Router::post('/add-sanpham',[ProductController::class,'addsp']);
Router::get('/update-sanpham',[ProductController::class,'onesp']);
Router::post('/update-sanpham',[ProductController::class,'updatesp']);
Router::get('/delete-sanpham',[ProductController::class,'deletesp']);

//Tài khoản admin
Router::get("/taikhoan", [TaikhoanController::class, 'listtk']);
Router::get('/edit-taikhoan', [AdminController::class, 'onetk']);
Router::post('/edit-taikhoan', [AdminController::class, 'edittk']);
Router::get('/delete-taikhoan', [AdminController::class, 'deletetk']);

//lich hẹn admin
Router::get("/lichhen", [AdminController::class, 'listlh']);
Router::get('/edit-lichhen',[AdminController::class,'onelh']);
Router::post('/edit-lichhen',[AdminController::class,'updatelh']);





}

/* Người Dùng*/ 

/*  Trang chủ   */
Router::get('/',[ProductController::class, 'trangchu']);
Router::get('/chitiet-sp',[ProductController::class, 'chitietsp']);
Router::get('/fullsp',[ProductController::class, 'fullsp']);
/*   Tài Khoản  */
Router::get('/dangnhap',[TaikhoanController::class, 'dangnhap']);
Router::post("/dangnhap-user", [TaikhoanController::class, 'loginPost']);
Router::get('/dangky',[TaikhoanController::class, 'dangky']);
Router::post("/dangky-user", [TaikhoanController::class, 'signupPost']);
Router::get("/dangxuat", [TaikhoanController::class, 'logout']);
Router::get('/edit-taikhoan',[TaikhoanController::class,'onetk']);
Router::post('/edit-taikhoan',[TaikhoanController::class,'updatetk']);
//Đặt lịch
Router::post('/add-lichhen', [ProductController::class, 'addlichhen']);
Router::get('/lichhentc',[ProductController::class, 'lichhentc']);
Router::get('/lichhentk',[ProductController::class, 'lichhentk']);

$router->resolve();
