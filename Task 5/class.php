<?php

$conn = new PDO('mysql:host=localhost;dbname=training_tasks','root','');

// var_dump($conn);
class DB{
    // get all resource
    function __construct(){

    }
    public function index($table){
        $conn = new PDO('mysql:host=localhost;dbname=training_tasks','root','');
        $query="SELECT *FROM $table";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchALL();
        return $result;
    }
    // get single resource
    public function show($table, $id){
        $conn = new PDO('mysql:host=localhost;dbname=training_tasks','root','');
        $query="SELECT *FROM $table WHERE $table.id=$id";
        $sql=$conn->prepare($query);
        $sql->execute();
        $result=$sql->fetchALL();
        return $result;
    }
    // update resource
    public function update($table, $data, $cond){
        $conn = new PDO('mysql:host=localhost;dbname=training_tasks','root','');
        $query="UPDATE $table
        SET name=$data[1],email=$data[2],password=$data[3]
        WHERE $table.id=$cond";
        $sql=$conn->prepare($query);
        $result = $sql->execute();
        if( $result){
            echo "record was updated";
        }
    }
    // create new resource
    public function create($table, $data){
        $conn = new PDO('mysql:host=localhost;dbname=training_tasks','root','');
        $query="INSERT INTO users(id,name,
        email ,
        password )
        values(:id,:name,:email,:password)";
        $sql=$conn->prepare($query);
        $dataa = [
            "id"=>$data[0],
            ":name"=>$data[1],
            ":email"=>$data[2],
            ":password"=>$data[3]
        ];
        $result = $sql->execute( $dataa);
        if( $result){
            echo "record was created";
        }
    }
    // destroy new resource
    public function destroy($table, $id){
        $conn = new PDO('mysql:host=localhost;dbname=training_tasks','root','');
        $query="DELETE FROM $table WHERE $table.id=$id";
        $sql=$conn->prepare($query);
        $sql->execute();
    }
}