<html>
    <head></head>
        <body>
            <form action = " " method = "post" enctype="multipart/form-data">
                upload file:<input type = "file" name= "myfile"><br><br>
                <input type = "submit" name="submit">
</form>
</body>
</html>
<?php
//echo $_FILES['myfile'];
//print_r ($_FILES)['myfile'];
 $filenames = $_FILES ['myfile']['name'];
$tempname = $_FILES['myfile']['tmp_name'];
$target = "webs/";
move_uploaded_file($tempname,$target_dir.$filenames);
?>