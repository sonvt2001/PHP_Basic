<?php declare(strict_types=1);

    $name = array("Tèo", "Tí", "Su");
    echo $name[0] . ", " . $name[1] . ", " . $name[2];

    echo "</br>";

    $infor = array("Name" => "Sơn" , "Age" => "23" , "Address" => "Bình Dương");

    echo "Name : " . $infor["Name"] . "</br>" . "Age : " . $infor["Age"] . "</br>" . "Address : " . $infor["Address"];

    echo "</br>";

    $thongtin["Name"] = "Sơn";
    $thongtin["Age"] = 23;
    $thongtin["Address"] = "Bình Dương";

    echo "Name :" . $thongtin["Name"] . "</br>";
    echo "Age :" . $thongtin["Age"] . "</br>";
    echo "Address :" . $thongtin["Address"] . "</br>";

    echo "</br>";

    $Class = array(
        array("12.1", 33, "Mr.A"),
        array("12.2" , 30, "Mr.B"),
        array("12.3", 32, "Mr.C")
    );

    echo " Class Information </br> ";

    echo "Class : " . $Class[0][0] . " - The number of students : " . $Class[0][1] . " - Teacher : " . $Class[0][2] . "</br>";
    echo "Class : " . $Class[1][0] . " - The number of students : " . $Class[1][1] . " - Teacher : " . $Class[1][2] . "</br>";
    echo "Class : " . $Class[2][0] . " - The number of students : " . $Class[2][1] . " - Teacher : " . $Class[2][2] . "</br>";

    echo "</br>";
    echo " Class Information with Foreach";

    foreach( $Class as $class ){
        echo "<ul>";
        foreach( $class as $value ){
            echo "<li>" . $value . "</li>";
        }
        echo "</ul>";
    }
 ?>