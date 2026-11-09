<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex03_SumAverage.php</title>
</head>
<body>
    <?php
       
        $scores = [85, 90, 72, 64, 98, 77];
        $total = array_sum($scores);
        $average = $total / count($scores);
        echo "Total: {$total}<br>";
        echo "Average: " . round($average, 2) . "<br>";
        echo "Highest: " . max($scores) . "<br>";
        echo "Lowest: " . min($scores) . "<br>";
    ?>
</body>
</html>
