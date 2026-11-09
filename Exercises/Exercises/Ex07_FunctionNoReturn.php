<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex07_FunctionNoReturn.php</title>
</head>
<body>
    <?php
       
        function greet(string $name, string $city): void {
            echo "Hello {$name} from {$city}!<br>";
        }
        greet("Sophea", "Kampot");
        greet("Dara", "Phnom Penh");
        greet("Vuthy", "Siem Reap");
    ?>
</body>
</html>
