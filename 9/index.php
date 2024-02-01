<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 9</title>    
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <?php
        /* Строки в PHP */
        echo "<b>Строки в PHP</b><br>";

        $str = "hello";
        echo $str;

        echo "<br>";

        $str = "abc";
        $strSecond = "def";
        echo $str . $strSecond;
        
        echo "<br>";
        
        $str = "hello";
        $strWorld = "world";
        echo $str . " " . $strWorld;

        echo "<br>";

        $str = "length";
        echo "Длина строки " . $str . " = "  . strlen($str);

        echo "<br>";

        $str = "Длина";
        echo "Длина строки " . $str . " = "  . mb_strlen($str,"UTF-8");

        echo "<br>";

        /* Работа с HTML тегами в PHP */
        echo "<b>Работа с HTML тегами в PHP</b><br>";

        echo "<i>" . "Курсивный текст" . "</i>";

        echo "<br>";

        echo 1 . "<br>" . 2 . "<br>" .  3 . "<br>" .
             4 . "<br>" . 5 . "<br>" . 6 . "<br>"  . 
             7 . "<br>" . 8 . "<br>" . 9;

        echo "<br>";

        echo "<img src=\"./img/ele-running.gif\" class=\"eleRunImg\"></img>";

        echo "<br>";

        echo "<form name=\"test\" method=\"post\" action=\"javascript:alert('Вы ввели какие то данные :)')\">
        <p>Ваше имя:<br>
         <input type=\"text\" size=\"40\" name=\"oneText\" value=\"123\">
        </p>
        </form>";

        echo "<textarea rows=\"10\" cols=\"45\"></textarea>";

        echo "<br>";

        /* Логические значения в PHP */
        echo "<b>Логические значения в PHP</b><br>";

        $bool = true;
        echo var_export($bool);

        echo "<br>";

        $bool = false;
        echo var_export($bool);

        echo "<br>";

        /* Значение NULL */
        echo "<b>Значение NULL</b><br>";   

        $varNull = null;
        echo var_export($varNull);

        echo "<br>";

        echo var_export($ThisVariableDoesntExist);

    ?>
    </div>
</div>
</body>
</html>