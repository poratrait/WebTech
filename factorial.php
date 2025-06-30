<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator (Using Recursion)</h2>

    <form method="post" action="">
        <label for="number">Enter a non-negative integer:</label>
        <input type="number" name="number" id="number" min="0" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    // Recursive function to calculate factorial
    function factorial($n) {
        if ($n === 0 || $n === 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);

        if ($number < 0) {
            echo "<p>Please enter a non-negative number.</p>";
        } else {
            $result = factorial($number);
            echo "<p>Factorial of $number is: <strong>$result</strong></p>";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE>
<html>
    <head>
        <Title>Factorial Calculator</Title>
</head>
<body>
    <h2>Factorial Calculator (using recursion function)</h2>
    <form method="POST" action="">
        <label for="number" >Enter a non negative integer:</label>
        <input type="number" name="number" id="number" min="0" required>
        <input type="submit" value="calculate">
</form>
<?php
function factorial($n){
    if ($n==0 || $n==1){
        return 1;
    }
    else{
        return $n*factorial($n-1){
        }
    }
        if($_SERVER ["REQUEST_METHOD"]=="POST"){
            $number = intval ("POST"["NUMBER"]);
        }IF(number<0){
            echo"<p>please enter a non-negative integer</p>";
        }
        else{
            echo"<p>factorial of $number is: <strong>$resulr</strong></p>";
        }
    }
    ?>
</body>
</html>
