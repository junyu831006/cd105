<?php
    $n=10;
    
    for($i=1;$i<=$n;$i++){
        $sum=0;
        for($j=1;$j<=$i;$j++){
            if($j!=$i){
                echo $j,"+";
            }else{
                echo $j;
            }
           $sum+=$j; 
        }
        echo "=",$sum;
        echo "<br>";
    }
    // for($i=$n-1;$i>=1;$i--){
    //     for($j=1;$j<=$i;$j++){
    //         echo "*";
    //     }
    //     echo "<br>";
    // }
?>