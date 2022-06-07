<?php

    function Vat($amount)
    {
        $total_vat=$amount*0.15;
        echo"Total vat $total_vat";
    }
    Vat(500);
?>