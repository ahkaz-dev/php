<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 2-3(Часть 1)</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="/selfTask/2-3/secondPartTwo.php">Вторая часть</a>
    </p>
    <?php
            /* Работа с count */
            echo "<b>Работа с count</b><br>";

            $arr = ['One','Two','Three'];
            echo 'Длина массива $arr = ' . count($arr);

            echo "<br>";

            $lastElemArr = count($arr)-1;
            echo "Последний элемент по count() = " . $arr[$lastElemArr];
            
            echo "<br>";

            /* Работа с in_array */
            echo "<b>Работа с in_array</b><br>"; 
            
            $arr = ['Hello', 2020, 'World!', 3, 404];
            echo "В массиве есть цифра 3 = "; echo var_dump(in_array(3, $arr));

            echo "<br>";

            /* Работа с array_sum и array_product */
            echo "<b>Работа с array_sum и array_product</b><br>"; 

            $arr = [1, 2, 3, 4, 5];
            echo array_sum($arr);

            echo "<br>";

            echo array_product($arr);

            echo "<br>";

            $arr = [10, 10, 10, 10];
            $averageArr = array_sum($arr) / count($arr);
            echo $averageArr;

            echo "<br>";

            /* Работа с range */
            echo "<b>Работа с range</b><br>";             

            $arr = [];
            $arr = range(1,100);
            echo $arr[99];

            echo "<br>";

            $arrLetter = [];
            $arrLetter = range('a','z');
            echo $arrLetter[20];

            echo '<br>';

            $arr = range(1,9);
            $strArr = implode('-', $arr);
            echo $strArr;

            echo '<br>';

            $arr = array_sum(range(1,100));
            echo $arr;

            echo '<br>';

            $arr = array_product(range(1,10));
            echo $arr;

            echo '<br>';

            /* Работа с array_merge */
            echo "<b>Работа с array_merge</b><br>"; 
            
            $fArr = [1, 2, 3];
            $sArr = ['a', 'b', 'c'];
            $resultArr = array_merge($fArr,$sArr);
            foreach($resultArr as $elem) {
                echo $elem . ' ';
            }
            //print_r ($resultArr);

            echo '<br>';

            /* Работа с array_slice */
            echo "<b>Работа с array_slice</b><br>";
            
            $arr = [1, 2, 3, 4, 5];
            $resultArr = array_slice($arr,1,4);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            //print_r($resultArr);

            echo "<br>";

            /* Работа с array_splice */
            echo "<b>Работа с array_splice</b><br>";
            
            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 1,4, [4,5]);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            //print_r($arr);
            echo "<br>";

            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 0,5, [2,3,4]);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            //print_r($arr);
            echo "<br>";

            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 3,0, ['a', 'b', 'c']);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            //print_r($arr);
            echo "<br>";

            $arr = [1, 2, 3, 4, 5];
            array_splice($arr, 1,0, ['a', 'b']);
            array_splice($arr, 6,0, ['c']);
            array_splice($arr, 8,0, ['e']);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            //print_r($arr);
            echo "<br>";

            /* Работа с array_keys, array_values, array_combine */
            echo "<b>Работа с array_keys, array_values, array_combine</b><br>";   
            
            $arr = ['a'=>1, 'b'=>2, 'c'=>3];
            $keys = array_keys($arr);
            $values = array_values($arr);
            foreach($keys as $elem) {
                echo $elem . ' ';
            }
            foreach($values as $elem) {
                echo $elem . ' ';
            }
            echo "<br>";

            $letter = ['a', 'b', 'c'];
            $num = [1, 2, 3];
            $letterNumeric = array_combine($letter, $num);
            foreach($letterNumeric as $key => $elem) {
                echo $key . ' = ' . $elem . ' ';
            }
            echo "<br>";

            /* Работа с array_flip, array_reverse */
            echo "<b>Работа с array_flip, array_reverse</b><br>";
            
            $arr = ['a'=>1, 'b'=>2, 'c'=>3];
            $arr = array_flip($arr);
            foreach($arr as $key => $elem) {
                echo $key . ' = ' . $elem . ' ';
            }
            echo "<br>";

            $arr = [1, 2, 3, 4, 5];
            $arr = array_reverse($arr);
            foreach($arr as $key => $elem) {
                echo $elem . ' ';
            }
            echo "<br>";

            /* Работа с array_search */
            echo "<b>Работа с array_search</b><br>";    
            
            $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
            $posElem = array_search('-', $arr);
            echo $posElem;

            echo "<br>";

            $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
            $posElem = array_search('-', $arr);
            array_splice($arr, $posElem, $posElem);
            foreach($arr as $key => $elem) {
                echo $elem . ' ';
            }
            echo "<br>";

            /* Работа с array_replace */
            echo "<b>Работа с array_replace</b><br>";  
            
            $arr = ['a', 'b', 'c', 'd', 'e'];
            $replacements = array(0 => "!", 3 => "!!");
            $arr = array_replace($arr, $replacements);
            foreach($arr as $key => $elem) {
                echo $elem . ' ';
            }
            echo "<br>";

            /* Работа с сортировку */
            echo "<b>Работа с сортировку</b><br>";         
            
            $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
            arsort($arr);
            echo 'по возрастанию ';
            foreach($arr as $key => $elem) {
                echo $key .' ' . $elem . ' ';
            }
            echo ' <br> ';
            $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
            echo 'по убыванию ';
            ksort($arr);
            foreach($arr as $key => $elem) {
                echo $key .' ' . $elem . ' ';
            }
            echo '<br>';
            echo 'случайный ';
            $arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
            array_rand($arr);
            foreach($arr as $key => $elem) {
                echo $key .' ' . $elem . ' ';
            }
            echo '<br>';

            /* Работа с array_rand */
            echo "<b>Работа с array_rand</b><br>";
            
            $arr = ['a'=>1, 'b'=>2, 'c'=>3];
            echo array_rand($arr);
            echo "<br>";

            $arr = ['a'=>1, 'b'=>2, 'c'=>3];
            $randKeyArr = array_rand($arr);
            echo $arr[$randKeyArr];
            echo "<br>";
    ?>
    </div>
</div>
</body>
</html>