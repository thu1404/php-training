<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <?php
        $info = ['A' => '1000$', 'B' => '1200$', 'C' => '1400$'];
        echo "<table> <tbody>";
        foreach($info as $key => $val){
            echo "<tr> <td> Salary of Mr. " . $key ." is</td> <td>" . $val . "</td> </tr>";  
        }
        echo "</tbody> </table>"
    ?>
</body>
</html>