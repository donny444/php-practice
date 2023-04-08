<?php
    $price = 100;
    $discount = 10;
    $pricediscount = (($price*$discount)/100);
    $final = ($price-$pricediscount);
    echo "price = ".number_format($price, 2)." บาท";
    echo "<br/>";
    echo "discount = ".$discount."%";
    echo "<br/>";
    echo "pricediscount = ".number_format($pricediscount, 2)." บาท";
    echo "<br/>";
    echo "final = ".number_format($final, 2)." บาท";
?>