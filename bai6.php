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
       $factorial = 1; 
       for($x = 2; $x <= 7; $x++){
        $factorial *= $x;
       }
       echo "Giai thừa của 7 = " . $factorial;
    ?>
</body>
</html>