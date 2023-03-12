<?php
echo 'Q1 :Print “Welcome to php”';echo '</br>';
echo 'Welcome to php';

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q2 :Define the below variables';
$x=5;
$y='Welcome ';
$z=True;

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q3 :Display the type of each variable';echo '</br>';
echo gettype($x);echo '</br>';
echo gettype($y);echo '</br>';
echo gettype($z);

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q4 :Write a php script to print numbers from 0 to 15 using 2 methods';echo '</br>';
echo 'method 1';echo '</br>';
for($i=0;$i<=15;$i++){
    echo $i;
    echo ' ';
}
echo '</br>';
echo 'method 2';echo '</br>';
$arr=[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
for($i=0;$i<count($arr);$i++){
    echo $arr[$i];
    echo ' ';
}

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q5 :Define a constant with value “ITI”';echo '</br>';
const c='ITI';
echo 'c = '.c;
echo '</br>';

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q6 :Print the gettype of all variables';echo '</br>';
echo gettype($x);echo '</br>';
echo gettype($y);echo '</br>';
echo gettype($z);echo '</br>';
echo gettype(c);

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q7 :Print the isset of all variables';echo '</br>';
var_dump(isset($x));echo '</br>';
var_dump(isset($y));echo '</br>';
var_dump(isset($z));echo '</br>';

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q8 :Print the empty of all variables';echo '</br>';
var_dump(empty($x));echo '</br>';
var_dump(empty($y));echo '</br>';
var_dump(empty($z));echo '</br>';
var_dump(empty(c));

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q9 :Add two numbers m and n and store them in result -then check if 
result > 50 print Accepted else print Not accepted';echo '</br>';
$n=51;
$m=60;
$result=$n+$m;
if($result>50){
    echo 'Accepted';echo '</br>';
}else{
    echo 'Not accepted';echo '</br>';
}

function add($n_,$m_){
    return $n_ + $m_;
}
$result_=add(50,32);
if($result_>50){
    echo 'Accepted';echo '</br>';
}else{
    echo 'Not accepted';echo '</br>';
}

echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q10 :Write a e PHP script to display string, values within a table.
Note : Use HTML table elements';echo '</br>';
$salary = ['salary of mr A'=> '1000$',
'salary of mr B'=> '1200$',
'salary of mr C'=> '1400$'];
// foreach ($salary as $key => $value) {
//     echo "Key: $key; Value: $value";
//     echo '</br>';
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #key{
            color: blue;
        }
        table,td{
            border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
        foreach ($salary as $key => $value) {
            echo"
                <table>
                <tr>
                    <td id='key'>$$key</td>
                    <td>$value</td>
                </tr>
            </table>";
        }
    ?>
</body>
</html>
<?php
echo '</br>';
echo '------------------------------------';
echo '</br>';

echo 'Q11 :We need a function that can transform a number into a string';echo '</br>';
function transform_($num){
    settype($num,'string');
    return $num;
}
$num=5;
echo 'data type (num) before function => '.gettype($num);echo '</br>';
$answer =transform_($num);
echo 'data type (num) after function =>  ' .gettype($answer);echo '</br>';

?>
