<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<body>
<?php
session_unset();
session_destory();
echo "Session variables are cleared and session is destoryed.";
?>
    
</body>
</html>