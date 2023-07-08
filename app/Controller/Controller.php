<?php

//cHỈ CÓ NHIỆM vụ ren điơ view
namespace App\Controller;
 
class Controller{
    public function view($path, $data=[]){
        extract($data);
        include_once __DIR__ . "/../../view/$path.php";
    }
    public function push_auth($users)
    {
        $_SESSION["auth"] = $users;
    }
}