<?php
    $element=12;
    $elements=[12,45,78,98,78,63];
    for ($i=0; $i < count($elements); $i++) { 
        if($elements[$i]==$element)
        {
            echo "Element found";
        }
    }
?>