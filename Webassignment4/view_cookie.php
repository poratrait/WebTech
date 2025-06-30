<?php
    if (isset($_COOKIE["userdata"])) {
        $userinfo = json_decode($_COOKIE["userdata"], true);
        echo "Name: " . $userinfo["username"] . "<br>";
        echo "Email: " . $userinfo["email"] . "<br>";
        echo "Roll No: " . $userinfo["rollno"] . "<br>";
    }
    else{
        echo "Cookie Not Set";
    }
?>


<htmL>
    <body>
        <br><br>
        <button><a style="text-decoration: none;" href="cookie.php">Set Cookie</a></button>
        <button><a style="text-decoration: none;" href="search_email.php">Search Email</a></button>
    </body>
</htmL>