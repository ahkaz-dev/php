<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1</title>
</head>
<body>
    <?php
        session_start();

        if (!empty($_SESSION['auth'])) {
            echo "hello";
        }
    ?>
</body>
</html>