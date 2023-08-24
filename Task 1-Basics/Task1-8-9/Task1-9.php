<?php
    function area($h,$w){
        echo "<h1> This rectangle is $h inches high and $w inches wide and has an area of ".$h*$w. " square inches </h1>";
    }
    area($_POST["hieght"],$_POST["width"]);
?>