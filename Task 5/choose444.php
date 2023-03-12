<?php
        if(isset($_POST['enter'])){
            require("./class.php");
            $ob=new DB();
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $data=[$id,$name,$email,$password];
            $table=$ob->create($_POST['tablename'], $data);
        }
    ?>