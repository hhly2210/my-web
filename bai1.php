<!DOCTYPE html>
<html lang="en">
<body>
<div>
        <?php 


            // Nhập m,n
                $m=5;$n=5;
                echo "Chiều cao: ".$m."<br/>";
                echo "Chiều rộng:  ".$n."<br/>";

            echo "Hình tam giác<br/>";
            for ($i=0; $i <= $m; $i++) { 
                for ($j=0; $j <= $m-$i; $j++) {
                    if ($j == $m-$i) {
                        for ($x=0; $x < 2*$i+1; $x++) { 
                            echo "*";
                        }  
                    }
                    else
                        echo " ";
                }
                echo "<br/>";
            }
            echo "<br/>Hình chữ nhật<br/>";
            for($i = 0; $i <= $m; $i++) {

                for($j = 0; $j <= $n; $j++) {
        
                    echo "*";
                }
        
                echo "</br>";
            }
        ?>
        
    </div>   
</body>
</html>