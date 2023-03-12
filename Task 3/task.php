<?php
// $form_info=$_REQUEST;
// var_dump($form_info);
// die();
if(isset($_POST['submit']))
{
// var_dump($form_info);
    $conn = new PDO('mysql:host=localhost;dbname=xxx','root','');
    // var_dump($conn); 
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];
    $room_no=$_POST['room_no'];

    $pic = $_FILES['profile_picture'];
    $from = $pic['tmp_name'];
    $extension = explode('/', mime_content_type($from))[1];
    $file_name = time() . '.' . $extension;
    $to = "./pictures/$file_name";
    move_uploaded_file($from, $to);


    $query="INSERT INTO users(id,namee,
    email ,
    passwordd ,
    confirm_password ,
    room_no,
    profile_picture)
    values(:id,:namee,:email,:passwordd,:confirm_password,
    :room_no,:profile_picture)";
    $sql=$conn->prepare($query);

    $data = [
        ":id" => $id,
        ":namee" => $name,
        ":email" => $email,
        ":passwordd" => $password,
        ":confirm_password" => $confirm_password,
        ":room_no" => $room_no,
        ":profile_picture" => $file_name
    ];
    // if($sql)
    // {
    //     echo 'Data prepered';
    // }else{
    //     echo 'Data Not prepered';
    // }
    $result = $sql->execute( $data);
    if($result)
    {
        header('Location:form.html');
        // echo 'Data inserted';
    }else{
        echo 'Data Not inserted';
    }
}

else if(isset($_POST['display'])){
    $conn = new PDO('mysql:host=localhost;dbname=xxx','root','');
    $query="SELECT * FROM users";
    $sql=$conn->prepare($query);
    $sql->execute();
    $display=$sql->fetchALL();
    // echo '<pre>';
    // var_dump($display);
    // echo '</pre>';
    $users=$display;
}
else if(isset($_POST['search'])){
    $conn = new PDO('mysql:host=localhost;dbname=xxx','root','');
    $s=$_POST['search_value'];
    settype($s,'int');
    $query="SELECT *FROM users WHERE users.id = $s";
    $sql=$conn->prepare($query);
    $sql->execute();
    $display=$sql->fetchALL();
    // echo gettype($s);
    $users=$display;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,thead,th,td{
            border: 1px solid;
        } 
    </style>
</head>
<body>
    <form action="./delete.php" method="post" name="display">
    <table>
            <thead>
                <tr>
                    <th>delete</th>
                    <th>id </th>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                    <th>confirm password</th>
                    <th>room number</th>
                    <th>pic</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><input type="submit" name="id" value="<?php echo $user['id']?>"></td>
                        <td><?php echo $user['id']?></td>
                        <td><?php echo $user['namee']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['passwordd']?></td>
                        <td><?php echo $user['confirm_password']?></td>
                        <td><?php echo $user['room_no']?></td>
                        <td><?php echo $user['profile_picture']?></td>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </form>
</body>
</html>



