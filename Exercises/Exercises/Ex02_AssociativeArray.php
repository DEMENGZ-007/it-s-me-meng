<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex02_AssociativeArray.php</title>
</head>
<body>
    <?php
       
        $student = ["name" => "Sokha", "age" => 20, "city" => "Kampot", "score" => 88];
        foreach ($student as $key => $value) {
            echo ucfirst($key) . ": " . $value . "<br>";
        }
    ?>
</body>
</html>
