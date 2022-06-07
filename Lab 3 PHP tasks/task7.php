<!-- star pattern -->

    <?php

        $num=3;
        for ($i=0; $i < $num; $i++) { 
            for ($j=0; $j <=$i; $j++) { 
                
                echo"*";
            }
            echo"<br>";
        }



    ?>

<!-- 123 pattern  -->
<?php


$rows = 3; 
for($i = $rows; $i>=1; --$i)
{
for($j = 1; $j<=$i ; ++$j)
{
echo ($j);
}
echo ("<br>"); 
}
?>

<!-- abc pattern  -->
<?php

function numpat($n)
{
	

    $alphabets=range('A','Z');
	$num = 0;

	
	for ($i = 0; $i < $n; $i++)
	{
		
		
		for ($j = 0; $j <= $i; $j++ )
		{
			
			echo $alphabets[$num]." ";

			
			$num = $num + 1;
		}

		
		echo "<br>";
	}
}

	// Driver Code
	$n = 3;
	numpat($n);

?>

