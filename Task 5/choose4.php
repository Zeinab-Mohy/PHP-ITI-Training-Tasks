<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./choose44.php" method="post">
        <label for="table">enter name of table,please</label><br><br>
        <input type="text" name="tablename">
        <input type="submit" name="enter" value="enter">
        <?php
        if(isset($_POST['enter'])){
            header("location:choose44.php");
        }
        ?>
    </form>
</body>
</html>