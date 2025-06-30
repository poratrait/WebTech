<?php
    setcookie("WebTechII", "expired", time() - 3600); 
    echo "Old cookie deleted.";
?>

<html>
    <body>
        <br><br>
        <button><a style="text-decoration: none;" href="create_cookie.php">Create Cookie</a></button>
    </body>
</html>
