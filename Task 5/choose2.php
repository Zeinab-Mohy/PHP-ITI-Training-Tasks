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
            $table=$ob->show($_POST['tablename'], $_POST['id']);
            echo '<pre>';
            print_r($table);
            echo '</pre>';
        }
    ?>
    <form action="" method="post">
        <label for="table">enter name of table,please</label><br><br>
        <input type="text" name="tablename">
        <label for="table">enter name of id,please</label><br><br>
        <input type="text" name="id">
        <input type="submit" name="enter" value="enter">
    </form>
</body>
</html>