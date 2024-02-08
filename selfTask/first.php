<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 1-2</title>
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<div id="phpDiv">
        <div class="center">
        <?php
            /* Работа с % */
            echo "<b>Работа с %</b><br>";
            
            $a = 10;
            $b = 3;
            echo "Остаток = " . $a % $b;

            echo "<br>";

            $a = 20;
            $b = 6;
            echo ($a % $b == 0 ) ? "Делится с остатком " : "Не делится";

            echo "<br>";

            /* Работа со степенью и корнем */
            echo "<b>Работа со степенью и корнем</b><br>";

            $st = pow(10,2);
            echo $st;

            echo "<br>";

            $sqrt = sqrt(245);
            echo $sqrt;

            echo "<br>";

            $elemArr = 0;
            $arr = [4, 2, 5, 19, 13, 0, 10];
            foreach ($arr as $k ) {
                $elemArr += $k;
            }
            echo sqrt($elemArr);

            echo "<br>";

            /* Работа с функциями округления */
            echo "<b>Работа с функциями округления</b><br>";

            $num = sqrt(379);
            $numRound = round($num);
            $numCeil = ceil($num);
            $numFloor = floor($num);

            echo "Результаты округления числа " . $num  . " = " . $numRound . " " . $numCeil . " " . $numFloor;

            echo "<br>";

            $num = sqrt(587);
            $roundArr = [
                "floor" => floor($num),
                "ceil" => ceil($num)
            ];
            echo "Массив округлений для " . $num . " = ";
            echo var_dump($roundArr);

            echo "<br>";

            /* Работа с min и max */
            echo "<b>Работа с min и max</b><br>";
                
            echo "Минимальное число = "  . min(4, -2, 5, 19, -130, 0, 10);
            echo "<br>";
            echo "Максимальное число число = "  . max(4, -2, 5, 19, -130, 0, 10);

            /* Работа с рандомом */
            echo "<b>Работа с рандомом</b><br>";
            
            $ranNum = mt_rand(1,100);
            echo $ranNum;

            echo "<br>";

            $i = 0;
            $ranNum = [];
            while ( $i < 10 ) {
                $ranNum += mt_rand(1,100);
                $i++;
            }
            echo var_dump($ranNum);
        ?>
        </div>
</div>
</body>
</html>