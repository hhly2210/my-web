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
    $a = 2;
    $b = 5;
    $c = -3;
    echo "Phương trình bậc nhất: " . $a . 'x + ' . $b . ' = 0<br>';
    if ($a == 0) {
        if ($b == 0) {
            echo 'Phương trình có vô số nghiệm.';
        } else {
            echo 'Phương trình vô nghiệm.';
        }
    } else {
        $x = -$b / $a;
        echo 'Nghiệm của phương trình là: ' . $x;
    }
    echo "<br>Phương trình bậc hai: " . $a . 'x^2 + ' . $b . 'x + '. $c . ' = 0<br>';
    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        echo 'Phương trình vô nghiệm.';
    } elseif ($delta == 0) {
        $x = -$b / (2 * $a);
        echo 'Nghiệm kép của phương trình là: ' . $x;
    } else {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo 'Nghiệm thứ nhất của phương trình là: ' . $x1 . '<br>';
        echo 'Nghiệm thứ hai của phương trình là: ' . $x2;
    }

    ?>
</body>

</html>