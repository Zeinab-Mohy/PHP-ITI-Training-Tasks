<?php

echo 'Q1 :Create an array that contain values (PHP, Open 
Source, ITI, Day2, Arrays)”';echo '</br>';
$arr=['PHP', 'Open Source', 'ITI', 'Day2', 'Arrays'];

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q2 :Print the array elements using loop (2 methods)';echo '</br>';
echo 'method 1';echo '</br>';
for ($i=0;$i<count($arr);$i++){
    echo $arr[$i].'  ';
}
echo '</br>';
echo 'method 2';echo '</br>';
$i=0;
function loop($arr,$i){
    echo $arr[$i];echo " ";
}
while($i<count($arr)){
    loop($arr,$i);
    $i++;
}

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q3 :Create an associative array called Info according to 
the following -Please add your info';echo '</br>';
$info=['name'=>'zeinab',
'age'=>20,
'email'=>'zeinab@gmail.com',
'college'=>'fcai'];


echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q4 :Please print all the elements inside info array';echo '</br>';
foreach ($info as $key => $value) {
    echo "Key: $key , Value: $value";
    echo '</br>';
}

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q5 :Sort the array using different ways';echo '</br>';
echo 'way 1 :';
echo ' in descending order, according to the value';echo'</br>';
arsort($info);
foreach ($info as $key => $value) {
    echo "Key: $key , Value: $value";
    echo '</br>';
}

echo 'way 2 :';
echo 'in ascending order, according to the key';echo'</br>';
ksort($info);
foreach ($info as $key => $value) {
    echo "Key: $key , Value: $value";
    echo '</br>';
}

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q6 :Check the function array_keys() and apply it to the 
info array';echo '</br>';
$a=$info;
print_r(array_keys($a));

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q7,8 :Create form';echo '</br>';
$form_info=$_REQUEST;
// var_dump($form_info);
$g=$form_info['gender'];
if($g=='female'){
echo "thanks Miss ".$form_info['firstname']." ".$form_info['lastname'] ;
}else{
    echo "thanks Mr ".$form_info['firstname']." ".$form_info['lastname'] ;
}
echo '</br>';echo '</br>';
echo 'please reveiw your information';echo '</br>';echo '</br>';
echo 'name : '.$form_info['username'];echo '</br>';echo '</br>';
echo 'address : '.$form_info['address'];echo '</br>';echo '</br>';
if(!empty($form_info['skills'])){
    echo 'your skills : ';
    foreach($form_info['skills'] as $skill) {
        echo $skill."  ";
    }
    echo '</br>';echo '</br>';
}else{
    echo "you didn't add any skill ";echo '</br>';echo '</br>';
}
echo 'department : '.$form_info['department'];echo '</br>';echo '</br>';

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q9,10 :Save the info you submitted into a file';echo '</br>';
$file_name = './info_file.txt';
$data=$form_info;
file_put_contents($file_name, print_r($data, true),FILE_APPEND);
echo file_get_contents($file_name);


?>

