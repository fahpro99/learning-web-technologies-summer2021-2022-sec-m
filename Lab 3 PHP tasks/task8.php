<?php
    $myArray=[
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']

    ];
    $k=2;
    for ($i=0; $i <=3;$i++ )
    { 
        for ($j=0; $j <=$k ; $j++) { 
            echo $myArray[$i][$j];
        }
        $k--;
        echo "<br>";
    }
    $y=3;
    for ($q=0; $q <=2 ; $q++) { 
        for ($r=$y; $r <=3; $r++) { 
            echo $myArray[$q][$r]." ";          
        }
        $y--;
        echo "<br>";
    }
?>