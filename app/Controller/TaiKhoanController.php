<?php

namespace App\Controller;

use App\Model\TaikhoanModel;
use App\Model\CategoryModel;
use App\Request;
class TaikhoanController extends Controller {

    public function dangnhap(){
        // session_start();
        $danhmuc = CategoryModel::all();
        $this->view('/taikhoan/dangnhap',['danhmuc' => $danhmuc]);
    }


    public function dangky(){
        // session_start();
        $danhmuc = CategoryModel::all();
        $this->view('/taikhoan/dangky',['danhmuc' => $danhmuc]);
    }

    public function listtk(){
        $taikhoan = TaikhoanModel::all();
        $this->view('/admin/taikhoan/listtk',['taikhoan' => $taikhoan]);
    }

    public function loginPost(Request $request)
    {
        session_start();

        $users = $request->getBody();

        $u = new TaikhoanModel();
        $uCheck = $u->fetch_login($users["name_taikhoan"], $users["pass_taikhoan"]);

        // print_r($userCheck);

        if ($uCheck == true) {
            $user = TaikhoanModel::fetch_login($users["name_taikhoan"], $users["pass_taikhoan"]);

            $this->push_auth($user);
            header("location: /");
        } else {
            header("location: /dangnhap");
        }
    }

    public function signupPost(Request $request)
    {
        session_start();

        $users = $request->getBody();
        $users['role'] = 0;

        $userResgister = new TaikhoanModel();
        $userResgister->insert($users);

        header("location:/dangnhap");
    }

    public function logout()
    {
        session_start();

        session_destroy();

        header("location: /");
    }

    public function onetk(Request $request){
        $id = $request->getBody()['id'];
           
        $taikhoan = TaikhoanModel::finOne($id);  
        
        $this->view('/taikhoan/updatetk',['taikhoan' => $taikhoan]);
    }
    public function updatetk(Request $request){
        $data = $request->getBody();
        // var_dump($data);die();  
        $p = new TaikhoanModel();
        $p->update($data['id_taikhoan'], $data);
        
        header("Location:/"); 
    }
}