<?php 

    /* 
       Variable names don't begin with a number
       UPPERCASE variables and lowercase variable are different
     */

    $varibaleNumber = 2001;
    $varibaleString = "SƠN";

    // Print 
    /*
        "DOTs (.) are used to connect variables together

        "<br>" : insert tag HTML to PHP
      
     */

    echo $varibaleString . "<br>" . $varibaleNumber;

    /*
        CONST is a variable but its value cannot be changed
        CONST 
     */

     define ("hang", "1234");
     echo "</br>";

     echo hang;

     define ("hang2", "son map");
     echo "</br>" . hang2;

     /*
        " " != ' '
      */

    $a = "son";
    echo "</br>";

    echo "$a" . "</br>";
    echo '$a' . "</br>";

?>