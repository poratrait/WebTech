<?php 
include("connection.php");
$new_username = "nepal";
$new_password = "lagrandee";

$sql = "UPDATE student
SET password = '$new_password', name = '$new_username'
WHERE id = '1'";

try{
    mysqli_query($conn,$sql);
    echo "user password updated sucessfully.";
}

catch (mysqli_sql_exception $e){
    echo "Could not update: ". $e->getMessage();
}

mysqli_close($conn);
?>