<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $username = $_POST["username"];
        $email = $_POST["email"];
        $rollno = $_POST["rollno"];

        $uerdata = json_encode([
            "username" => $username,
            "email" => $email,
            "rollno" => $rollno
        ]);

        setcookie("userdata", $uerdata, time() + (86400 * 3), "/");
        header("Location: cookie.php");
        exit();
    }

?>


<html>
    <body>
        <form action="cookie.php" method="post">
            <table>
                <tr>
                    <td colspan="2">Enter Your Details</td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="username" placeholder="Enter Your Name" required></td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td><input type="email" name="email" placeholder="Enter Your Email" required></td>
                </tr>
                <tr>
                    <td>Roll No: </td>
                    <td><input type="text" name="rollno" placeholder="Enter Your Roll No" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
        <button><a style="text-decoration: none;" href="view_cookie.php">View Cookie</a></button>
        <button><a style="text-decoration: none;" href="search_email.php">Search Email</a></button>
    </body>
</html>