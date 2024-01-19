<?php 
    /*
        strlen() : get a length of the string
        str_word_count : get a length of the string with a word
        strrev() : reverse the string
        strpos() : return position of the word
        str_replace() : change the value at position of the string
     */


    echo "Name 'Vũ Trường Sơn' has " . strlen("Vũ Trường Sơn") . " characters";
    echo "</br>";
    echo "Name 'Vu Truong Son' has " . str_word_count("Vu Truong Son") . " words";
    echo "</br>";
    echo "Name 'Vu Truong Son' is reversed to " . strrev("Vu Truong Son");
    echo "</br>";
    echo strpos("Vu Truong Son", "Son");
    echo "</br>";
    echo str_replace("Vu", "Nguyen" , "Vu Truong Son");
?>