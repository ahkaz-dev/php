<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр1-2</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <div id="phpDiv">
        <div class="center">
        <?php
            /* Работа с переменными */
            echo "<b>Работа c переменными</b><br>";

            $a = 3;
            echo $a; //выведем значение переменной a

            $a = 10;
            $b = 2;
            //выведем сложение, разность, умножение и деление переменных a b
            echo "<br>" . $a+$b . "\t" . $a-$b . "\t" .  $a*$b . "\t" . $a/$b; 

            $c = 15;
            $d = 2;
            //выведем result в которой сложение a b
            echo "<br>" . $result = $c + $d;

            //выведем сложение a b c 
            echo "<br>" . $a=10 + $b=2 + $c=5;

            $a = 17;
            $b = 10;
            $c = $a-$b;
            $d = 7;
            //выведем результат сложения c d
            echo "<br>" . $result = $c + $d;

            /* Работа со строками */
            echo "<br><b>Работа со строками</b><br>";

            //выведем строку
            echo $text="Привет, Мир!"; 

            $text1 = 'Привет, ';
            $text2 = 'Мир!';
            //конкатенация строк
            echo "<br>" . $text1 . $text2;

            //строка содержащая 'мое имя'
            echo "<br>" . $name = "Привет, Захар!";
            
            //строка содержащая 'мой возраст'
            echo "<br>" . $age = "Мне 17 лет!";

            /* Обращение к символам строки */
            echo "<br><b>Обращение к символам строки</b>";

            $text = "abcde";
            //выведем символы ace
            echo "<br>" . $text[0] . $text[2] . $text[4];

            $otherTest = "abcde";
            $otherTest[0] = "!";
            //заменим первый символ строки
            echo "<br>" . $otherTest;

            $num = "12345";
            //сумма всех символов строки
            $result = $num[0] + $num[1] + $num[2] + $num[3] + $num[4];
            echo "<br>" . $result;

            /* Практика */
            echo "<br><b>Практика</b>";

            $secHour = 60*60;
            $secDay = $secHour * 24;
            $secMonth = $secDay * 31;
            //нахождение секунд для разного времени
            echo "<br>" . "сек*ч = " .$secHour . ", сек*д = " . $secDay .", сек*м = " . $secMonth;

            $hour = 13;
            $minuts = 45;
            $second = 15;
            // "текущее" время
            echo "<br>" . $hour . ":" . $minuts . ":" . $second;

            $num = 6;
            // нахождение квадрата числа
            echo "<br>" . $num * $num;

            /* Работа с присваиванием и декрементами */
            echo "<br><b>Работа с присваиванием и декрементами</b>";
            $var = 47;
            $var += 7;
            $var -= 18;
            $var *= 10;
            $var /= 20;
            echo "<br>" . $var;

            $text = 'Я';
            $text .= ' хочу';
            $text .= ' знать';
            $text .= ' PHP!';
            echo "<br>" . $text;

            $var = 10;
            $var += 1;
            $var += 1;
            $var -= 1;
            echo "<br>" . $var;

            $var = 10;
            $var += 7;
            $var += 1;
            $var -= 1;
            $var += 12;
            $var *= 7;
            $var -= 15;
            echo "<br>" . $var;
        ?>
        </div>
    </div>
</body>
</html>