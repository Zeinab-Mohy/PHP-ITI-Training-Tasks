<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["submit"])){
        $current_month=$_POST['current_month'];
        $summer=array('June','July','August');
        $fall=array('September','October','November');
        $winter=array('December','January','February');
        if(!empty($current_month)){
            if(in_array($current_month,$summer)){
                echo "summer";
            }else if(in_array($current_month,$fall)){
                echo "fall";
            }else if(in_array($current_month,$winter)){
                echo "winter";
            }else{
                echo "spring";
            }
        }
    }

    ?>
    <form action="" method="Post">
        <label for="">enter current month</label>
        <input type="text" name="current_month">
        <input type="submit" name="submit">
    </form>
</body>
</html>