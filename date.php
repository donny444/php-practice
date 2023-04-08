<?php
    date_default_timezone_set("Asia/Bangkok");
    echo date("d/m/Y");
    echo "<br/>";
    echo date("H:i:s");
    echo "<br/>";
    echo date("d/m/Y H:i:s");
    echo "<br/>";
    $date = date("Y-m-d H:i:s"); #Timestamp
    echo $date;
    echo "<br/>";
    echo date("d/m/Y H:i:s", strtotime($date));
?>