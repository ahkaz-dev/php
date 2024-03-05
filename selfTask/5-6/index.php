<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 5-6</title>
</head>
<body>
<div id="phpDiv">
    <div class="center">
        <?php
            /* Формы */
            echo "<b>Формы</b><br>";
            function mb_ucfirst($string, $encoding){
                $firstChar = mb_substr($string, 0, 1, $encoding);
                $then = mb_substr($string, 1, null, $encoding);
                return mb_strtoupper($firstChar, $encoding) . $then;
            }
            
            $name;
            $age;
            if (!empty($_REQUEST['name']) and !empty($_REQUEST['age'])) {
                // Получаем данные из таблицы по запросу name
                // удаляем все html теги
                $name = strip_tags($_REQUEST['name']);
                $name = mb_ucfirst($name, "utf8");

                // Получаем данные из таблицы по запросу age
                // удаляем все html теги
                $age = strip_tags($_REQUEST['age']);
                echo "Привет, " . $name . ", " . $age . " лет.";  
            }            
        ?>
        <form action="" method="GET">  
            <input type="text" name="name">
            <input type="text" name="age">  
            <input type="submit"> 
        </form>
    </div>
</div>
</body>
</html>