<?php require_once('import/functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex12 Include</title>
</head>
<body>
    <?php
       
        include('import/header.php');
        $scores = [80, 65, 90, 45];
        echo "Total: " . totalScore($scores) . "<br>";
        echo "Average: " . averageScore($scores) . "<br>";
        echo "Result: " . result(averageScore($scores)) . "<br>";
        include('import/footer.php');
    ?>
</body>
</html>
