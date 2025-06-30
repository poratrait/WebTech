<?php
    $emailValue = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_COOKIE["userdata"])) {
            $username = $_POST["username"];
            $userinfo = json_decode($_COOKIE["userdata"], true);

            if ($userinfo["username"] == $username) {
                $emailValue = $userinfo["email"];
            } else {
                $emailValue = "No user found.";
            }
        } else {
            $emailValue = "Cookie not set.";
        }
    }
?>


<htmL>
    <body>
        <form action="search_email.php" method="post">
            <label>Name: </label>
            <input type="text" name="username" placeholder="Enter Your Name" required>
            <input type="submit" value="Search">
        </form>
                <label>Email: </label>
                <input type="text" name="email" readonly value="<?php echo htmlspecialchars($emailValue ?? ''); ?>">
        <br><br>
        <button><a style="text-decoration: none;" href="cookie.php">Set Cookie</a></button>
        <button><a style="text-decoration: none;" href="view_cookie.php">View Cookie</a></button>
    </body>
</htmL>