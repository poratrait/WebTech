
<?php
    setcookie("WebTechII" , "PHP", time() + 86400);
    if (isset($_COOKIE["WebTechII"])) {
        echo "Cookies are enabled. Value: ".$_COOKIE["WebTechII"];
    } else {
        echo "Cookies are disabled or not yet set. Reload the page.";
    }
?>

<html>
    <body>
        <br><br>
        <button><a style="text-decoration: none;" href="delete_cookie.php">Delete Cookie</a></button>
    </body>
</html>
