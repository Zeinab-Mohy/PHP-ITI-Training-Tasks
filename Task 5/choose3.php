<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['enter'])){
            require("./class.php");
            $ob=new DB();
            $id=$_POST['id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $data=[$id,$name,$email,$password];
            $ob->update($_POST['tablename'], $data, $id);
        }
    ?>
    <form action="" method="post">
    <input type="hidden" name="tablename" value="users">
        id:<input type="number" name="id"><br><br>
        name:<input type="text" name="name"><br><br>
        email:<input type="email" name="email"><br><br>
        password:<input type="password" name="password"><br><br>
        <input type="submit" name="enter" value="enter">
    </form>
</body>
</html>