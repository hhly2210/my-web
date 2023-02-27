<!DOCTYPE html>
<html>
<body>
    <?php
    $n = 30;
    $sum = 0;
    for ($i = 0; $i <= $n; $i++) {
        if ($i % 2 != 0 || $i == 0) {
            continue;
        }
        $sum += (1 / $i);
    }
    echo "Tổng phân số có mấu là số chẵn là:<br/>S = $sum";
    ?>
</body>
</html>