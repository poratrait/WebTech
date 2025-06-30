<?php
include ("connection.php");
?>
<html>
<head>
</head>
<body>


<form action = "<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>"method= "POST">
Name: <input type = "text" name = "name">
Password: <input type="password" name="password">
<input type = "submit" value = "submit">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST['name'];
    $password = $_POST['password'];

    if(empty($name)){
        echo "please enter a username";
    }
        else if(empty($password)){
            echo "Please enter a password";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO student (name, password) VALUES('$name', '$password')";

            if (mysqli_query($conn, $sql)){
                echo "New record creates successfully!";
            }
            else{
                echo "Error:". Mysqli_error($conn);
            }
        }
    }
    ?>
</body>
</html>