<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex11_GradeFunction.php</title>
</head>
<body>
    <?php
        
        function grade($average) {
            if ($average >= 80) return "A";
            if ($average >= 65) return "B";
            if ($average >= 50) return "C";
            return "F";
        }
        $averages = [92, 70, 55, 30];
        foreach ($averages as $avg) {
            echo "Average {$avg} = Grade " . grade($avg) . "<br>";
        }
    ?>
</body>
</html>
