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

    echo "</br>";
 
    $ten = array("tí", "tèo", "tú");
    
    print_r($ten);
    
    echo "<h4>Add elements</h4>";

    $ten[] = "tình"; 
    $ten[] = "tru";

    print_r($ten);

    echo "<h4>Edit elements</h4>";

    $ten[2] = "su";

    print_r($ten);

    echo "<h4>Delete elements</h4>";

    unset($ten[2]);

    print_r($ten);

    echo "</br>";

    $num = array(1,2,3,4,5);

    $num[] = "son";

    echo "<h4>For loop with array</h4>";

    for ( $i = 0 ; $i < count($num); $i++ )
    {
        echo ( $num[$i]);
        echo "</br>";
    }

    $a = array("K", "H", "L" , "M", "A" , "B" , "E", "F", "D");

    echo "<h4>Sort Array</h4>";

    sort($a);

    print_r($a);

    echo "<h4>Rsort Array</h4>";

    rsort($a);

    print_r($a);

    echo "</br>";

    $str1 = "01/01/2001";

    echo "</br>";
    
    printf( $str1);

    echo "<h4>Convert String to Array</h4>";

    $mang1 = explode("/", $str1);

    print_r($mang1);

    echo "</br>";

    $str2 = array("xin", "chào");

    print_r( $str2 );

    echo "<h4>Convert Array to String</h4>";

    $mang2 = implode(" ",$str2);

    print_r($mang2);

 ?>