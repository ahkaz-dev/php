<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="index.php">Вернуться обратно</a>
    </p>
    <?php
        $color = "#3bbf9f";
        $votes = array();
        // Читаем количество голосов для каждого варианта ответа
        for ($i = 5; $i >= 2; $i--) {
            $file = $i . ".txt";
            $f = fopen($file, "r");
            $votes[$i] = fread($f, 100);
            fclose($f);
        }

        // Отображение "диаграммы"
        echo "<b>Результаты голосования:</b><br>";
        echo "<div style=display:flex>";    
        echo "<div style=margin-right:15px>";

        echo "<p>" . "Отлично" . "</p>" .  "<br>";
        echo "<p>" . "Хорошо" . "</p>" . "<br>";
        echo "<p>" . "Удовлетворительно" . "</p>" . "<br>";
        echo "<p>" . "Плохо" . "</p>" . "<br>";

        echo "</div>";

        echo "<div>";
        foreach ($votes as $key => $value) {
            switch($key) {
                case 2:
                    echo $key . " - 10 " . " чел. ";
                    if ($value <= 0) 
                        echo "<span class=smallText style=\"\">(Около 0 голосов)</span>";
                    else 
                        echo "<span class=smallText style=\"\">(Около $value голосов)</span>";
                    break;
                case 3:
                    echo $key . " - 7 " . " чел. ";
                    if ($value <= 0) 
                        echo "<span class=smallText style=\"\">(Около 0 голосов)</span>";
                    else                     
                        echo "<span class=smallText style=\"\">(Около $value голосов)</span>";
                    break;
                case 4:
                    echo $key . " - 6 " . " чел. ";
                    if ($value <= 0) 
                        echo "<span class=smallText style=\"\">(Около 0 голосов)</span>";
                    else                     
                        echo "<span class=smallText style=\"\">(Около $value голосов)</span>";
                    break;
                case 5:
                    echo $key . " - 35 " . " чел. ";
                    if ($value <= 0) 
                        echo "<span class=smallText style=\"\">(Около 0 голосов)</span>";
                    else                     
                        echo "<span class=smallText style=\"\">(Около $value голосов)</span>";
                    break;
            }
            if ($value <= 0) 
                echo "<hr align='left' color='white' size='20' width='0px'><br>";
            else 
                echo "<hr align='left' color='" . $color . "' size='20' width='" . $value . "'><br>";
        }
        echo "</div>";
    echo "</div>";    
    ?>  
    </div>
</div>        
</body>
</html>
