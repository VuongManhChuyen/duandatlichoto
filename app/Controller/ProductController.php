<?php

namespace App\Controller;
use App\Model\CategoryModel;
use App\Model\ProductModel;
use App\Model\DiachiModel;
use App\Model\LichhenModel;
use App\Request;
class ProductController extends Controller{

    public function listsp(){
        $sanpham = ProductModel::all();
       
        $this->view('/admin/sanpham/listsp',['sanpham' => $sanpham]);
    }

    public function createsp(){

        $danhmuc = CategoryModel::all();
        
        $this->view('/admin/sanpham/addsp',['danhmuc' => $danhmuc]);
        // var_dump($danhmuc);die(); 
    }
    public function addsp(Request $request)
    {
        $products = $request->getBody();
        $products['img_sanpham'] = $_FILES['img_sanpham']['name'];

        move_uploaded_file($_FILES['img_sanpham']['tmp_name'], "image/" . $_FILES['img_sanpham']['name']);

        $p = new ProductModel();
        $p->insert($products);
        header("location:/sanpham");
        exit;
    }

    public function onesp(Request $request){
        $id = $request->getBody()['id'];
        $sanpham = ProductModel::finOne($id);
        $danhmuc = CategoryModel::all();
        
        
        $this->view('/admin/sanpham/updatesp',['sanpham' => $sanpham,'danhmuc' => $danhmuc]);
    }

    public function updatesp(Request $request){
        $data = $request->getBody();
        if($_FILES['img_sanpham']['name']>0){
            $data['img_sanpham']= $_FILES['img_sanpham']['name'];
            move_uploaded_file($_FILES['img_sanpham']['tmp_name'], 'image/'. $data['img_sanpham']);
        }   
        $p = new ProductModel();
        $p->update($data['id_sanpham'], $data);
        
        header("Location:/sanpham"); 
    }
    public function deletesp(Request $request){
        $id = $request->getBody()['id'];
        $p = new ProductModel();
        $p->delete($id);
        header("Location:/sanpham");
        exit();
    }

    public function trangchu(){

        $sanpham = ProductModel::top10();
        $sanphammoi = ProductModel::sanphammoi();
        $danhmuc = CategoryModel::all();       
        // var_dump($diachi);die();
        $this->view('nguoidung/index',['sanpham'=>$sanpham,'sanphammoi'=>$sanphammoi,'danhmuc'=>$danhmuc]);
    }

    public function chitietsp(Request $request){
        $id = $request->getBody()['id'];
        $sanpham2 = ProductModel::finOne($id);
        $danhmuc = CategoryModel::all();
        $diachi = DiachiModel::all();
        $sanpham3 = ProductModel::top5();
        // var_dump($sanpham3);die();
        $this->view('/nguoidung/sanpham/chitietsp',['sanpham2' => $sanpham2,'danhmuc' => $danhmuc,'diachi' => $diachi,'sanpham3' => $sanpham3]);
    }

    public function addlichhen(Request $request)
    {
        $lichhen = $request->getBody();
        

        $p = new LichhenModel();
        $p->insert($lichhen);
        
        header("location:/lichhentc");     
        exit;
    }
    public function lichhentc(){
        $danhmuc = CategoryModel::all();
        $this->view('nguoidung/lichhen/done_lichhen',['danhmuc' => $danhmuc]);
    }
    
    public function lichhentk(Request $request){
        $id = $request->getBody()['id'];
        $lichhen = ProductModel::lichhentk($id);
        $danhmuc = CategoryModel::all();
        // var_dump($lichhen);die();
        $this->view('/nguoidung/lichhen/lichhen',['lichhen' => $lichhen,'danhmuc' => $danhmuc]);
    }
    public function fullsp(){
        $fullsp = ProductModel::all();;
        $this->view('/nguoidung/sanpham/fullsp',['fullsp'=>$fullsp]);
    }



}