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
        // Viết chương trình tính n giai thừa

        // Cách 1: Dùng vòng for
        function giaiThua($n) {
            $sum = 1;
            if($n <= 0) {
                $sum = 1;
                echo "Giai thừa của $n = $sum";
            }
            else {
                for($i = $n; $i > 0; $i--) {
                    $sum *= $i;
                }
                echo "Giai thừa của $n = $sum";
            }
        }
        // Gọi hàm tính giai thừa
        echo "Cách 1: Dùng vòng for </br>";
        giaiThua(3);

        // Cách 2: Dùng đệ qui
        function tinhGiaiThua($n) {
            if($n > 0) {
                return $n * tinhGiaiThua($n - 1);
            } else {
                return 1;
            }
        }

        echo "</br>Cách 2: Dùng đệ qui </br>";
        echo "Giai thừa = ". tinhGiaiThua(3);


        
    ?>
</body>
</html>