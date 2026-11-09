<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex10_Calculator.php</title>
</head>
<body>
    <?php
        
        function add($a, $b)      { return $a + $b; }
        function subtract($a, $b) { return $a - $b; }
        function multiply($a, $b) { return $a * $b; }
        function divide($a, $b)   { return $b == 0 ? "Cannot divide by zero" : $a / $b; }
        echo "10 + 5 = " . add(10, 5) . "<br>";
        echo "10 - 5 = " . subtract(10, 5) . "<br>";
        echo "10 x 5 = " . multiply(10, 5) . "<br>";
        echo "10 / 5 = " . divide(10, 5) . "<br>";
        echo "10 / 0 = " . divide(10, 0) . "<br>";
    ?>
</body>
</html>
