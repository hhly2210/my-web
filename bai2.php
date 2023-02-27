<!DOCTYPE html>
<html>
<body>
<table border="1px">
<tr>
<?php 
    for($i = 1; $i <= 10; $i++) {
        echo"<td>";
        echo "Cửu chương $i</br>";
    	for($j = 1; $j <= 10; $j++) {
        	echo "$i x $j = ". ($i * $j) . "</br>";
        }
        echo "</td>";
    }

?> 
</tr>
</table>
</body>
</html>