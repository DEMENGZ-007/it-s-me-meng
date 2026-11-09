<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex01_IndexedArray.php</title>
</head>
<body>
    <?php
       
        $fruits = ["Mango", "Banana", "Apple", "Orange", "Grape"];
        echo "First fruit: " . $fruits[0] . "<br>";
        echo "Last fruit: " . $fruits[count($fruits) - 1] . "<br>";
        for ($i = 0; $i < count($fruits); $i++) {
            echo ($i + 1) . ". " . $fruits[$i] . "<br>";
        }
    ?>
</body>
</html>
