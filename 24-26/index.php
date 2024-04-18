<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 24-26</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        // Задание 1

        $color = "white";
        $votes = array();
        $file = "";
        echo "<b>Задание № 1</b><br>";
        
        if (isset($_POST['vote'])) {
            $value = $_POST['vote'];
            $file = $value . ".txt";
            $f = fopen($file, "r");
        
            $votes[$value] = fread($f, 100);
            $votes[$value]++;
        
            $f = fopen($file, "w");
            fwrite($f, $votes[$value]);
            fclose($f);
        }
        
        // Задаем начальное количество голосов для каждого варианта ответа
        if (!isset($votes[5])) $votes[5] = 0;
        if (!isset($votes[4])) $votes[4] = 0;
        if (!isset($votes[3])) $votes[3] = 0;
        if (!isset($votes[2])) $votes[2] = 0;
        
        
        if (isset($_POST['vote'])) {
            // Перенаправление на новую страницу
            header('Location: result.php');
            exit();
        }
        
    ?>
    <form action="" method="post">
        <label for="">Как вы оцениваете "что-то"?</label><br>
    <input type="radio" name="vote" value=5> Отлично <br>
    <input type="radio" name="vote" value=4> Хорошо <br>
    <input type="radio" name="vote" value=3> Удовлетворительно <br>
    <input type="radio" name="vote" value=2> Плохо <br>
    <input type="submit">
    </form>
    </div>
</div>
</body>
</html>