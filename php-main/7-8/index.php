<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 7-8</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<div id="phpDiv">
    <div class="center">
    <?php
        /* Работа с foreache */
        echo "<b>Работа с foreache</b><br>";

        $arr = ['html','css','php','js','jq'];
        foreach ($arr as $elem ) {
            echo $elem."<br>";
        }
        echo "<br>";
    ?>
    </div>
</div>
</body>
</html>