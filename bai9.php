<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tbody>
            <?php
                for($x = 1; $x <= 5; $x++){
                    echo "<tr>";
                    for($y = 1; $y <= 5; $y++){
                        echo "<td style='border:1px solid black;'>" . $x . " * " . $y . " = " . $x*$y . "</td>";
                    }
                    echo "</tr>";
                }

            ?>
        </tbody>
    </table>
</body>
</html>