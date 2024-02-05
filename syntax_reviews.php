<?php
    $language = "PHP";
    $solarsystem = array("Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune");
    echo "Review PHP Syntax!<hr>";

    //looping
    for($i = 0; $i <= 5; $i++)
    {

        //conditional
        if(($i%2) == 0)
        {
            echo "$i is even number<br>";
        }
        else
        {
            echo "$i is odd number<br>";
        }
    }

    function hello($var = "World")
    {
        echo "Hello $var";
    }

    hello($language);
?>