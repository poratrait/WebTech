<?php
if ($_SERVER ["REQUEST_METHOD"]=="POST"){
    $name = htmlspecialchars ($_POST ["name"]);
    echo "<h2>Hello, " . $name . "! welcome to the website.</h2>";
}else{
    echo"<h2>Invalid Request</h2>";
}
?>

