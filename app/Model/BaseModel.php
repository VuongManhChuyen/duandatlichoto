<?php
namespace App\Model;

use PDO;
use PDOException;
class BaseModel{
    protected $conn;
    protected $sqlBuilder;
    public function __construct(){
        try{
           $this->conn = new PDO("mysql:host=localhost;dbname=assignment_php2;charset=utf8","root",""); 
           $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(\PDOException $e){
            throw $e;
        }
    }
    //Funtion all(): lấy ra toàn bộ dữ liệu của 1 bảng

    public static function all(){
        $models = new static;
        $models->sqlBuilder = "select * from $models->tableName";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt ->execute();
        // var_dump($stmt);die();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    //Thêm dữ liệu
    //params: $data là 1 mảng dữ liệu có cấu trúc như sau 
    /* $data = [name=>]'chuyenvm', age=>20 */
    public function inset($data=[]){
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $colName = '';
        $parmas='';

        foreach($data as $key=>$value){
            $colName .="`$key`, ";
            $parmas .=":$key, ";
        }
        //Xóa dấu ', ' ở bên phải chuỗi
        $colName = rtrim($colName, ', ');
        $parmas = rtrim($parmas, ', ');
        //Nỗi vào chuỗi SQL
        $this->sqlBuilder .= $colName . ") VALUES (" .$parmas. ")";

        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute($data);
    }
    //Lấy 1 dữ liệu
    public static function finOne($id){
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE $model->id ='$id'";
        
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS,get_class($model));
        if($result){
            return $result[0];
        }
        return false;
    }
    // update dữ liệu
    public function update($id,$data=[]){
       
        $this->sqlBuilder = "UPDATE $this->tableName SET";
        foreach( $data as $colName => $value){
            $this->sqlBuilder .= "`$colName`=:$colName, ";
    }
        $this->sqlBuilder = rtrim($this->sqlBuilder, ", " );
        $this->sqlBuilder .= " WHERE $this->id = '$id'";
        $data[$this->id] = $id;
        // var_dump($data[$this->id]);die();
        $stmt = $this->conn->prepare($this->sqlBuilder);
        // var_dump($stmt);die();
        $stmt->execute($data);
}
    //Xóa 
    public function delete($id){
       
        $this->sqlBuilder = "DELETE FROM $this->tableName WHERE $this->id = '$id'";
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        
    }
    //Câu lệnh điều kiện
    public function where($colName, $condition, $value){
        $this->sqlBuilder = "SELECT * FROM $this->tableName WHERE `$colName` $condition '$value' ";
        return $this;
    }
    public function andwhere($colName, $condition, $value){
        $this->sqlBuilder .= " AND `$colName` $condition '$value' ";
        return $this;
    }
    public function orwhere($colName, $condition, $value)
    {
        $this->sqlBuilder .= " OR `$colName` $condition '$value' ";
        return $this;
    }
    public function get(){
        $stmt = $this->conn->prepare($this ->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public function insert($data=[]){
        $this->sqlBuilder = "INSERT INTO $this->tableName(";
        $colName = '';
        $param = '';
    
        foreach ($data as $key => $value){
            $colName .= "`$key` , ";
            $param .= ":$key , ";
        }
        $colName = rtrim($colName, ', ');
        $param = rtrim($param, ', ');
    
        $this->sqlBuilder .= $colName . ") VALUES (" .$param. ")";
    
        // echo $this->sqlBuider;
    
        $stmt = $this->conn->prepare($this->sqlBuilder);
        // var_dump($stmt);die();
        $stmt->execute($data);
    }
    // Top 10 sản phẩm yêu thích

    public static function top10(){
        $models = new static;
        $models->sqlBuilder = "select * from $models->tableName order by view_sanpham desc limit 5";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt ->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    public static function sanphammoi(){
        $models = new static;
        $models->sqlBuilder = "select * from $models->tableName order by id_sanpham desc limit 10";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt ->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    /* Tài Khoản */
   
        public static function fetch_login($name_taikhoan, $pass_taikhoan)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * From $model->tableName WHERE `name_taikhoan` = '$name_taikhoan' AND `pass_taikhoan` = '$pass_taikhoan'";

        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        if ($result) {
            return $result[0];
        }

        return false;
    }
    public static function top5(){
        $models = new static;
        $models->sqlBuilder = "select * from $models->tableName order by view_sanpham desc limit 3";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt ->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    public static function listlh(){
        $models = new static;
        $models->sqlBuilder = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham  order by A.id_lichhen";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt ->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }

    //lịch hẹn người dùng
    public static function lichhentk($id_taikhoan){
        $models = new static;
        $models->sqlBuilder = "SELECT A.id_lichhen,D.name_taikhoan,D.phone_taikhoan,D.email_taikhoan,A.date_lichhen,A.hours_lichhen,A.description_lichhen,A.id_nhanvien ,A.id_trangthai, B.name_trangthai, E.name_sanpham FROM trangthai B INNER JOIN lichhen A ON A.id_trangthai = B.id_trangthai INNER JOIN taikhoan D ON A.id_taikhoan = D.id_taikhoan INNER JOIN sanpham E ON A.id_sanpham = E.id_sanpham  WHERE A.id_taikhoan ='".$id_taikhoan."' order by A.date_lichhen";
        $stmt = $models->conn->prepare($models->sqlBuilder);
        $stmt ->execute();
        // var_dump($stmt);die();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);
        return $result;
    }
    
     
}