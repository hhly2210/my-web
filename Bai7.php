<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>VIết chương trình tính fibonacci thứ n <br></h4>
    <?php
        function fibonacci($n) {
            if($n < 0) {
                return -1;
            } else if ($n == 0 || $n == 1) {
                return $n;
            } else {
                return fibonacci($n - 1) + fibonacci($n - 2);
            }
        }
        $n = 8;
        echo " n = $n <br>";
        echo "Số fibonacci là :". fibonacci($n);
    ?>
</body>
</html>