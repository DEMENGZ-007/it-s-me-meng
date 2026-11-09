<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex09_FunctionReturn.php</title>
</head>
<body>
    <?php
        
        function area($w, $h) {
            return $w * $h;
        }
        function perimeter($w, $h) {
            return 2 * ($w + $h);
        }
        echo "Area: " . area(5, 3) . "<br>";
        echo "Perimeter: " . perimeter(5, 3) . "<br>";
    ?>
</body>
</html>
