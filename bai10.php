<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="border: 1px solid black; width: 240px;">
        <tbody>
        <?php
            for($x = 1 ; $x <= 8; $x++){
                echo "<tr>";
                for($y = 1; $y <= 8; $y++){
                    if(($x%2 == 0) == ($y%2 == 0)){
                        echo "<td style='background-color: black; width: 30px; height: 30px;'></td>";
                    } else {
                        echo "<td style='width: 30px; height: 30px;'></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
        
        </tbody>
    </table>
</body>
</html>