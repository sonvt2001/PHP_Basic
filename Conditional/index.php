<?php

    $a = 10;
    $b = 5;

    if( $a > $b )
    {
        echo $a . " > " . $b . "</br>";
    }
    else 
    {
        echo $a . " < " . $b . "</br>";
    }

    $name = "truc";
    if( $name == "son")
    {
        echo "
            <li>Name : SON </li>
            <li>Age : 23 </li>
        ";
    }
    elseif( $name == "truc" )
    {
        echo "
            <table>
                    <caption style = 'color: green;'>Student Information</caption>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                </tr>
                <tr>
                    <td>TRUC</td>
                    <td>19</td>
                </tr>
            </table>
        ";
    }
    else
    {
        echo "<p style = 'color: red'>There are no students with " . "'$name'" . " in the class<p>";
    }
?>