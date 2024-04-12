<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 22</title>
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
        echo "<b>Задание № 1</b><br>";
            // Дан массив с числами. Проверьте, что в этом массиве есть число 5. Если есть -
            // выведите 'да', а если нет - выведите 'нет'.
        $numArray = range(0, 15);
        shuffle($numArray);
        $numArray = array_slice($numArray ,0, 5);
        echo "Дан массив: [ ";
        foreach ($numArray as $key => $value) {
                echo $value . ", ";
            if ($key == count($numArray) - 1) {
                echo $value . " ]";
            }
        }

        $flag = false;
        foreach ($numArray as $value) {
            if ( $value == 5) {
                $flag = true;
            } else {
                $flag;
            } 
        }
        echo "<br>Ответ: ";
        if ($flag == true) {
            echo "Да, в массиве есть 5"; 
        } else {
            echo "Нет, в массиве нет 5"; 
        }
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 2
        echo "<b>Задание № 2</b><br>";
            // Дано число, например 31. Проверьте, что это число не делится ни на одно другое 
            // число кроме себя самого и единицы. То есть в нашем случае нужно проверить, что 
            // число 31 не делится на все числа от 2 до 30. Если число не делится - выведите 'нет', 
            // а если делится - выведите 'да'.
        $n1 = 2;
        $flag = false;
        for ( $i = 1; $i < $n1; $i++) { 
            if ( ($n1 / 1) & ($n1 / $n1) ) {
                $flag = true;
            }
        }
        echo "Число $n1, делится на 1 и $n1?";
        echo "<br>Ответ: ";
        if ($flag == true) {
            echo "Да"; 
        } else {
            echo "Нет"; 
        }
    ?>    
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 3
        echo "<b>Задание № 3</b><br>";       
            // Дан массив с числами. Проверьте, есть ли в нем два одинаковых числа подряд. 
            // Если есть - выведите 'да', а если нет - выведите 'не 
            $arr = [4,12,73,8,1,1,36,7,6,22,22,3];

            for ($i = 0; $i < count($arr); $i++) {
                if ($i && $arr[$i] == $arr[($i-1)]) {
                    echo 'есть идущие подряд: '.$arr[$i].' - '.$arr[$i].'<br>';
                }
            }
          
    ?>
    </div>
</div>
</body>
</html>
