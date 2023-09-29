<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Enter first number">
        <input type="text" name="operator" placeholder="Enter operator (+, -, *, /)">
        <input type="text" name="num2" placeholder="Enter second number"><br>
        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        if ($operator === '+') {
            $result = $num1 + $num2;
        } elseif ($operator === '-') {
            $result = $num1 - $num2;
        } elseif ($operator === '*') {
            $result = $num1 * $num2;
        } elseif ($operator === '/') {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            }
        }else {
            echo "Invalid operator. Please enter +, -, *, or /.";
        }

        echo "<h2>Result:</h2> " . $result;
    }
    ?>
</body>
</html>







