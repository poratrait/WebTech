<?php 
include("connection.php");

$id_deletion = 2;

$sql = "DELETE FROM student
WHERE id = '$id_deletion'";

try{
    mysqli_query($conn,$sql);
    echo "user deleted successfully.";
}

catch (mysqli_sql_exception $e){
    echo "Could not delete: ". $e->getMessage();
}

mysqli_close($conn);
?>
