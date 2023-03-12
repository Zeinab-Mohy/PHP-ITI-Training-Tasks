<?php

if(isset($_POST['getallresource'])){
header("location:choose1.php");
}else if(isset($_POST['getsingleresource'])){
    header("location:choose2.php");
}else if(isset($_POST['destroynewresource'])){
    header("location:choose5.php");
}else if (isset($_POST['createnewresource'])){
    header("location:choose4.php");
}else if($_POST['updateresource']){
    header("location:choose3.php");
}

?>