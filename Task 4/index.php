 <?php
    $username = $email = $passwordd=$verify=$hash="";
    $nameErr = $emailErr = $passErr =$errorSubmit= "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['username'])){
            $nameErr = "Name is required";
        } else {
            $username = $_POST["username"];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $nameErr = "Only letters and white space allowed";
            }
        }

        if(empty($_POST['email'])){
            $emailErr = "email is required";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if(empty($_POST['passwordd'])){
            $passErr = "password is required";
        } else {
            $passwordd = $_POST["passwordd"];
            $hash = password_hash($passwordd,PASSWORD_DEFAULT);
            $verify = password_verify($passwordd, $hash);
        }
        if($nameErr==""&&$emailErr==""&&$passErr==""){
            if(isset($_POST['submit'])){
                $conn = new PDO('mysql:host=localhost;dbname=task4_db','root','');
                $query="INSERT INTO users(username,
                email ,
                passwordd )
                values(:username,:email,:passwordd)";
                $sql=$conn->prepare($query);
                $data = [
                    ":username"=>$username,
                    ":email"=>$email,
                    ":passwordd"=>$hash
                ];
                $result = $sql->execute( $data);

                if($result)
                {
                    
                    header("location:userInfo.php");
                    // echo 'Data inserted';
                }else{
                    echo 'Data Not inserted';
                }
            }else{
                $errorSubmit="please, try to fill data again";
            }
    }
}
?>
