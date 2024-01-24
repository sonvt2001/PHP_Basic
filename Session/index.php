
<form action="index.php" method="post">
    <label>Delete session</label>

    <input type="submit" value="Delete" name="btn_delete">
</form>

<?php 
    //Create session

    session_start();

    $_SESSION["Name"] = "sonw";
    $_SESSION["Address"] = "Binh Duong Provide";
    $_SESSION["MyJob"] = array("PHP", "JS" , "HTML" , "CSS" , "MYSQL", "JQUERY");

    if( isset($_POST["btn_delete"]))
    {
        unset($_SESSION["Name"]);
        unset($_SESSION["Address"]);
        unset($_SESSION["MyJob"]);

        session_destroy();

        echo "<h4 style='color : red'>Deleted Session</h4>";
    }
    elseif ( isset($_SESSION["Name"]) xor isset( $_SESSION["Address"]) xor isset( $_SESSION["MyJob"]))
    {
        echo "<h4 style='color:green'>Session đã được khởi tạo : </h4>";
        echo "Session Name : " . $_SESSION["Name"];
        echo "</br>";
        echo "Session Address : " . $_SESSION["Address"];
        echo "</br>";
        $convertArrayToString = implode(" --- ",$_SESSION["MyJob"]);
        echo "Session MyJob : " . $convertArrayToString ;
    }

    else
    {
        echo "<h4 style='color:red'>Session chưa được khởi tạo !</h4>";
    }

   
    // else{
    //     echo "<h4 style='color : yellow'>Don't find session!</h4>";

    // }
?>
