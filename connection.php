<?php
$db_server ="localhost";
$db_user = "root";
$db_password= "";
$db_name= "web";
$conn= "";

try{
$conn= mysqli_connect($db_server, $db_user, $db_password, $db_name);
}
catch(mysql_sql_exception){
    echo "could not connect";
}
if ($conn){
    echo "connection";
}
    else{
        echo "no connection";
    }

?>

