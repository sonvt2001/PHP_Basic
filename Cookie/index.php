<?php
    // Create cookie

    $cookieName = "User";
    $cookieValue = "sonw";

    setcookie($cookieName, $cookieValue, time() + (30) , "/");

    if(isset($_COOKIE[$cookieName]))
    {
        echo "Cookie " . $cookieName . " ( " . $cookieValue . " ) đã được tạo !";
    }
    else
    {
        echo "Cookie chưa được khởi tạo !";
    }
 ?>