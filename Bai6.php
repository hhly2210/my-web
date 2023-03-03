<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4> Viết chương trình tính n giai thừa <br></h4>
    <?php
    function tinhGiaiThua($n)
    {
        if ($n > 0) {
            return $n * tinhGiaiThua($n - 1);
        } else {
            return 1;
        }
    }
    $n = 4;
    echo "n= $n <br>";
    echo "Giai thừa = " . tinhGiaiThua($n);
    ?>
</body>

</html>