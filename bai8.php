<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $y = 1;
        $x = 1;
        while($y >= 1 ){
            for($z = 1; $z <= $y; $z++){
                echo "*";
            }
            echo "<br>";
            if($x < 5){
                $y++;
            } else {
                $y--;
            }
            $x++;
        }
        
    ?>
</body>
</html>