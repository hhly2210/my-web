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

        // Cách 1: Tính tổng dãy số Fibonacci từ 1 đến n dùng vòng for
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
            return $fn;
        }    

        // echo fibonacci(7);

        $n = 5;
        $sum = 0;
        echo ("Cách 1: Tổng dãy số Fibonacci từ 1 đến $n là: ");
        for($i = 0; $i < $n; $i++) {
            $sum += fibonacci($i);
        }
        echo $sum;

        // Cách 2: Tính tổng dãy số Fibonacci từ 1 đến n dùng đệ quy
        function fibonacci2($n) {
            if($n < 0) {
                return -1;
            } else if ($n == 0 || $n == 1) {
                return $n;
            } else {
                return fibonacci2($n - 1) + fibonacci2($n - 2);
            }
        }

        // echo "Cách 2: Số fibonacci = ";
        // echo fibonacci2(6);

        $n2 = 6;
        $sum2 = 0;
        echo "</br>Cách 2: Tổng dãy số Fibonacci từ 1 đến $n2 là: ";
        for($i = 0; $i < $n2; $i++) {
            $sum2 += fibonacci2($i);
        }
        echo $sum2;
    ?>
</body>
</html>