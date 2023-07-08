<?php

namespace App\Controller;
use App\Model\CategoryModel;
use App\Model\LichhenModel;
use App\Model\TaikhoanModel;
use App\Model\TrangthaiModel;
use App\Request;

class AdminController extends Controller{
    public function index()
    {
        $this->view('/admin/header');
    }

    //danh mục admin

    public function listdm(){
        $danhmuc = CategoryModel::all();

        $this->view('/admin/danhmuc/listdm',['danhmuc' => $danhmuc]);
    }
    public function createdm(){
        $danhmuc = CategoryModel::all();

        $this->view('/admin/danhmuc/adddm',['danhmuc' => $danhmuc]);
    }
    public function adddm(Request $request){
        $danhmuc = $request->getBody();
        $p = new CategoryModel();
        $p->inset($danhmuc);

        header("location:/danhmuc");
        die;
    }

    public function deletedm(Request $request){
        $id = $request->getBody()['id'];
        $p = new CategoryModel();
        $p->delete($id);
        
        header("Location:/danhmuc");
        exit();
    }
    public function onedm(Request $request){
        $id=$request->getBody()['id'];
        $danhmuc = CategoryModel::finOne($id);
        return $this->view('admin/danhmuc/updatedm', ['danhmuc'=>$danhmuc]);
    }
    public function updatedm(Request $request){
        $data = $request->getBody(); 
        $p = new CategoryModel();
        $p->update($data['id_danhmuc'], $data);
        header("Location:/danhmuc"); 
    }

    //tài khoản admin
    public function onetk(Request $request){
        $id=$request->getBody()['id'];
        $taikhoan = TaikhoanModel::finOne($id);
        return $this->view('admin/taikhoan/edittk', ['taikhoan'=>$taikhoan]);
    }
    public function edittk(Request $request){
        $data = $request->getBody();
        $p = new TaikhoanModel();
        $p->update($data['id_taikhoan'], $data);
        header("Location:/taikhoan"); 
    }
    public function deletetk(Request $request){
        $id = $request->getBody()['id'];
        $p = new TaikhoanModel();
        $p->delete($id);
        header("Location:/taikhoan");
        exit();
    }

    //Lịch hẹn admin
    public function listlh(){
        $lichhen = LichhenModel::listlh();;
        // var_dump($lichhen);die();
        $this->view('/admin/lichhen/listlh',['lichhen' => $lichhen]);
    }
    public function onelh(Request $request){
        $id=$request->getBody()['id'];
        $lichhen = LichhenModel::finOne($id);
        $trangthai = TrangthaiModel::all();
        return $this->view('admin/lichhen/editlh', ['lichhen'=>$lichhen,'trangthai'=>$trangthai]);
    }
    public function updatelh(Request $request){
        $data = $request->getBody(); 
        $p = new LichhenModel();
        $p->update($data['id_lichhen'], $data);
        // var_dump($p->update($data['id_lichhen'], $data));die();
        header("Location:/lichhen"); 
    }




}