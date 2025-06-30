<?php
include "connection.php";
//$sql = "SELECT *FROM student ORDERBY id DESC ";
//$sql = "SELECT *FROM student Limit 5";
$sql = "SELECT *FROM student where name = 'nepal' ";

$result = mysqli_query ($conn, $sql);
if(mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        echo "id: ".$row["id"]. "Name: ".$row["name"]. "<br>";
    }
}
else{
    echo "0 resluts";
}
mysqli_close($conn);
?>