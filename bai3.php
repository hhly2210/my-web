<!DOCTYPE html>
<html>
<body>
    <?php
    $n = 30;
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        $sum += $i;
    }
    echo "Tổng các số lẻ từ 1 đến $n là $sum";
    ?>
</body>
</html>