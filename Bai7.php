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

        // Cách 1: Fibonacci dùng vòng for
        function fibonacci($n) {
            $f0 = 0;
            $f1 = 1;
            $fn = 1;

            if($n < 0) {
                return -1;
            } else if ($n == 0 || $n == 1) {
                return $n;
            } else {
                for($i = 2; $i < $n; $i++) {
                    $f0 = $f1;
                    $f1 = $fn;
                    $fn = $f0 + $f1;
                }
            }
            return "Cách 1: Số fibonacci thứ $n = ". $fn ."</br>";
        }    

        echo fibonacci(7);

        // Cách 2: Fibonacci dùng đệ quy
        function fibonacci2($n) {
            if($n < 0) {
                return -1;
            } else if ($n == 0 || $n == 1) {
                return $n;
            } else {
                return fibonacci2($n - 1) + fibonacci2($n - 2);
            }
        }

        echo "Cách 2: Số fibonacci = ";
        echo fibonacci2(6);
    ?>
</body>
</html>