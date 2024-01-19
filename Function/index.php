<?php declare(strict_types=1); // Strict requirements

    function ham($lesson)
    {
        echo "Hello, I'm Function </br> <h4>$lesson</h4>";
    }

    ham("Lesson 1 : Function Basic in PHP");
    ham("Lesson 2 : Function Basic in PHP");
    ham("Lesson 3 : Function Basic in PHP");
    ham("Lesson 4 : Function Basic in PHP");

    function infor($name, $age, $address)
    {
        echo "Name: $name </br>" . "Age : $age </br>" . " Address : $address";
        echo "</br>";
    }

    infor("Sơn", "23" , "Bình Dương") ;
    infor("Trúc", "19" , "Bình Dương");

    function phepcong( int $a , int $b )
    {
        $tong = $a + $b;
        return $tong;
    }

    echo phepcong(1,2);
?>