<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td,tbody {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
<table>
        <?php for($i=1;$i<=12;$i++){?>
        <tr>
            <th><?php echo $i ;?></th>
        </tr>
        <?php for($ii=1;$ii<=12;$ii++){?>
        <tbody>
            <td><?php echo $i." * ".$ii." = ". $i*$ii;}} ?></td>
        </tbody>
</table>
</body>
</html>