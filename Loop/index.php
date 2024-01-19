<?php

    $name = array("Tèo", "A", "B", "Su");

    echo "Print wwith Foreach </br>";

    foreach( $name as $value)
    {   
        echo " $value </br>";
    }

    echo "</br> Print wwith For Loop </br>";

    for ( $i = 0 ; $i < count($name); $i++)
    {
        echo $name[$i] . "</br>";
    }
?>