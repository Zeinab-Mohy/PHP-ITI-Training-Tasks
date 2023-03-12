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
        require('./index.php'); 
    ?>
     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="username">username</label>
        <input type="text" name="username">
        <span class="error">* <?php echo $nameErr;?></span><br><br>
        <label for="email">email</label>
        <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span><br><br>
        <label for="passwordd">password</label>
        <input type="password" name="passwordd">
        <span class="error">* <?php echo $passErr;?></span><br><br>
        <input type="submit" name="submit"><br><br>
        <span class="error"><?php echo $errorSubmit;?></span><br><br>
    </form>
</body>
</html>