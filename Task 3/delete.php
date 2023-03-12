<?php
// $form=$_REQUEST;
// var_dump($form);
// $id=$_POST['id'];
if(isset($_POST['delete'])){
    // echo "delete";
    $id=$_POST['id'];
    // echo $id;
    $conn = new PDO('mysql:host=localhost;dbname=xxx','root','');
    settype($id,'int');
    $query="DELETE FROM users WHERE users.id = $id";
    $sql=$conn->prepare($query);
    $sql->execute();
    // echo "record was deleted";
    header('Location:form.html');
}else{
    echo "no";
}

?>