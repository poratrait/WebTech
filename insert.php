<?php
include ("connection.php");

$username = "Sampada";
$password ="12345";

$sql = "INSERT INTO student(name,password)
VALUES('$username', '$password')";

try{
    mysqli_query($conn,$sql);
        echo "data insertion done";
    }

    catch(mysql_sql_exception){
        echo "exception caught";
    }

    mysqli_close($conn);
    ?>
