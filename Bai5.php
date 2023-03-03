<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h4>Tính tổng của 1 - 2 + 3 - 4 + ... + ((-1)^(n-1))*n trong đó ((-1)^(n-1))*n ?</h6>
    <?php
        $n = 5;
        echo "n = $n<br>";
        $sum = 0;
        for($i = 1; $i <= $n; $i++) {
            if($i % 2 == 0) {
                $sum -= $i;
            } else {
                $sum += $i;
            }
        }
        echo "Tổng với $n là : $sum";
    ?>
</body>
</html>