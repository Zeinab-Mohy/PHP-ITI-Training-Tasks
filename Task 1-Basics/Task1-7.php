<?php

$cities=array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

for($i=0;$i<count($cities);$i++){
    echo $cities[$i].", ";
}

echo "<br> <h1> After Sorting </h1> <br>";

sort($cities);
for($i=0;$i<count($cities);$i++){
    echo $cities[$i].", ";
}

echo "<br> <h1> After Sorting and Adding</h1> <br>";

array_push($cities,"Los Angeles", "Calcutta", "Osaka", "Beijing");
sort($cities);
for($i=0;$i<count($cities);$i++){
    echo $cities[$i].", ";
}
?>