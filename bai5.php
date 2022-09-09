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
        $for=0;
        for($x=1; $x <= 20; $x++){
            $for += $x;
        }
        echo '(for) tổng dãy số từ 1 đến 20 là ' . $for . "<br>";
        $while = 0;
        $dowhile=0;
        $i=$j=0;
        while ($i < 20) {
            $while += ++$i;
            
        }
        echo '(while) tổng dãy số từ 1 đến 20 là ' . $while . "<br>";
        do {
            $dowhile += $j++;
         }while($j <= 20);
        echo '(do while) tổng dãy số từ 1 đến 20 là ' . $dowhile . "<br>";
    ?>
</body>
</html>