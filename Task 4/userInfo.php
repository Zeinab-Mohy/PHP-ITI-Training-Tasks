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
    <?php
        $conn = new PDO('mysql:host=localhost;dbname=task4_db','root','');
        $query="SELECT max(users.id),username,email,passwordd FROM users limit 1 ";
        $sql=$conn->prepare($query);
        $sql->execute();
        $users=$sql->fetchALL();
        // require('./index.php');
    ?>
    <form action="" method="post" name="display">
        <h2>Your Profile Info</h2>
        <table>
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>password</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user):?>
                    <tr>
                        <td><?php echo $user['username']?></td>
                        <td><?php echo $user['email']?></td>
                        <td><?php echo $user['passwordd']?></td>
                    </tr>
                    <?php endforeach;?>
            </tbody>
            </table>
    </form>
</body>
</html>