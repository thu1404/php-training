<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bai 11</title>
</head>
<body>
    <?php
        for($x=1; $x <= 100; $x++){
            if($x%3 == 0 && $x%5 == 0){
                echo $x . ' FizzBuzz' . "<br>";
            } elseif($x%5 == 0){
                echo $x . ' Buzz' . "<br>";
            } elseif($x%3 == 0){
                echo $x . ' Fizz' . "<br>";
            } else{
                echo $x . '<br>';
            }
        }
    ?>
</body>
</html>