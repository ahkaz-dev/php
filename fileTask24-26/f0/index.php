<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Файлы</title>
    <link rel="stylesheet" href="/php/css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        $a = (int)file_get_contents("1.txt");
        $b = (int)file_get_contents("1.txt");
        printf("Сумма чисел из файлов = %d + %d = %d", $a, $b, $a + $b);
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        $array = array(5, 8, 5, 10, 76);
        $powerArr = array_sum($array);
        if (file_put_contents("sum.txt", $powerArr)) {
            echo "Файл записан<br>";
        }
        if (isset($_GET["check"])) {
            echo "Суммма массива = " . file_get_contents("sum.txt");
        }


    ?>
    <form action="" method="get">
    <input type="submit" name="check" value="Проверить файлы"/>

    </form>
    </div>    
</div>    
</body>
</html>