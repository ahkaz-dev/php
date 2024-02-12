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

            echo "<br>";

            /* Работа с рандомом */
            echo "<b>Работа с рандомом</b><br>";
            
            $ranNum = mt_rand(1,100);
            echo $ranNum;

            echo "<br>";

            $i = 0;
            $ranNumArr = [];
            $ranNum = 0;
            while ( $i < 10 ) {
                $ranNum = mt_rand(1,100);
                $ranNumArr[$i] = $ranNum;
                $i++;
            }
            echo "Массив с mt_rand(1,100) = [ ";
            foreach( $ranNumArr as $i => $ranNum ) {
                echo $ranNum . " ";
            }
            echo " ] ";

            echo "<br>";

            /* Работа с модулем */
            echo "<b>Работа с модулем</b><br>";
            
            $a = 3;
            $b = 20;
            echo abs( $a - $b );

            echo "<br>";

            $numArr = [1, 2, -1, -2, 3, -3];
            foreach( $numArr as $i => $num ) {
                $numArr[$i] = abs($num);
            }
            echo "Массив с abs(float|int \$num) = [ ";
            foreach( $ranNumArr as $i => $ranNum ) {
                echo $ranNum . " ";
            }
            echo " ] ";

            echo "<br>";

            /* Задачи */
            echo "<b>Задачи</b>";    
            
            $x = 30;
            $xArr = [];
            for( $i = 1; $i <= $x; $i++ ) {
                if ($x % $i == 0 ) {
                    $xArr[$i] += $i;
                }
            }
            echo "<br>Массив со всеми делителями числа = [ ";
            foreach( $xArr as $i => $elemArr ) {
                echo $elemArr . " ";
            }
            echo " ] ";
            
            echo "<br>";

            $numArr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
            $resultArr = [];
            $sum = 0;
            $i = 0;
            foreach( $numArr as $val => $elem ) {
                $i++;
                $sum += $elem;
                $resultArr[$val] += $elem;
                if ($sum > 10) {
                    break;
                }
            }
            echo $i . "<br>";
            foreach( $resultArr as $elemArr ) {
                echo $elemArr . " ";
            }
   
        ?>
        </div>
</div>
</body>
</html>