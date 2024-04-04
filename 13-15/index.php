<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 13-15</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 1 */
        echo "<b>Задание № 1</b><br>";
        
        /* Объявление переменных для каждгого известного товара
           Где $product_n_price - стоимость товара, $product_n_name - именование товара
        */        
        $product_1_price = 300;
        $product_1_name = "Процессор";

        $product_2_price = 150;
        $product_2_name = "Материнская плата";

        $product_3_price = 270;
        $product_3_name = "Монитор";

        // Находим среднюю стоимость всех товаров с помощью формулы m = (a1 + a2 +a3..an) / n
        $productAverage = ($product_1_price + $product_2_price + $product_3_price) / 3;
        
        /* Находим максимальную стоимость товара
           Где $max_product - именование товара, $max_price - максимальная стоимость товара
        */
        $max_product;
        $max_price;

        // Реализация нахождения максимальной стоимости товара с помощью if-else
        /*
        if (($product_1_price > $product_2_price) and ($product_1_price > $product_3_price)) {
            $max_price =  $product_1_price;
            $max_product = $product_1_name;
        } else if (($product_2_price > $product_1_price) and ($product_2_price > $product_3_price)) {
            $max_price = $product_2_price;
            $max_product = $product_2_name;
        } else {
            $max_price = $product_3_price;
            $max_product = $product_2_name;
        }
        */
        
        /* Находим минимальную стоимость товара
           Где $min_product - именование товара, $min_price - минимальная стоимость товара
        */
        $min_product;
        $min_price;
        
        // Реализация нахождения минимальной стоимости товара с помощью if-else
        /*
        if (($product_1_price < $product_2_price) and ($product_1_price < $product_3_price)) {
            $min_price =  $product_1_price;
            $min_product = $product_1_name;
        } else if (($product_2_price < $product_1_price) and ($product_2_price < $product_3_price)) {
            $min_price = $product_2_price;
            $min_product = $product_2_name;
        } else {
            $min_price = $product_3_price;
            $min_product = $product_3_name;
        }
        */
        
        /* Функция findMaxProduct 
           позволяет найти максимальную стоимость товара
           Если передавать значения напрямую, то результат будет аналогичным
        */
        function findMaxProduct($product_1_price, $product_2_price, $product_3_price,
                                $product_1_name, $product_2_name, $product_3_name){
            if (($product_1_price > $product_2_price) and ($product_1_price > $product_3_price)) {
                $max_price =  $product_1_price;
                $max_product = $product_1_name;
                return $result = $max_product . " " . $max_price;
            } else if (($product_2_price > $product_1_price) and ($product_2_price > $product_3_price)) {
                $max_price = $product_2_price;
                $max_product = $product_2_name;
                return $result = $max_product . " " . $max_price;
            } else {
                $max_price = $product_3_price;
                $max_product = $product_3_name;
                return $result = $max_product . " " . $max_price;
            }               
        }
        
        /* Функция findMinProduct
           позволяет найти минимальную стоимость товара
           Если передавать значения напрямую, то результат будет аналогичным
        */
        function findMinProduct($product_1_price, $product_2_price, $product_3_price,
                                $product_1_name, $product_2_name, $product_3_name){
            if (($product_1_price < $product_2_price) and ($product_1_price < $product_3_price)) {
                $min_price =  $product_1_price;
                $min_product = $product_1_name;
                return $result = $min_product . " " . $min_price;
            } else if (($product_2_price < $product_1_price) and ($product_2_price < $product_3_price)) {
                $min_price = $product_2_price;
                $min_product = $product_2_name;
                return $result = $min_product . " " . $min_price;
            } else {
                $min_price = $product_3_price;
                $min_product = $product_3_name;
                return $result = $min_product . " " . $min_price;
            }
        }
        echo "<table class=\"firstTableClass\">";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Товар" . "</th>";
                    echo "<th>Цена" . "</th>";
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                echo "<tr>";
                    echo "<td>" . $product_1_name  . "</td>";
                    echo "<td>" . $product_1_price  . "₽</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>" . $product_2_name  . "</td>";
                    echo "<td>" . $product_2_price . "₽</td>";
                echo "</tr>";  
                echo "<tr>";
                    echo "<td>" . $product_3_name  . "</td>";
                    echo "<td>" . $product_3_price . "₽</td>";
                echo "</tr>";                                                  
            echo "</tbody>";
            echo "<tfoot>";
                echo "</tr>";
                    echo "<th>Средняя цена</th>";
                    //echo "<td>" . $productAverage . "₽</td>";
                    printf("<td>" . "%d" . "₽</td>", $productAverage);
                echo "</tr>";
                echo "</tr>";
                    echo "<th>Самый дорогой</th>";
                    echo "<td>" . findMaxProduct($product_1_price, $product_2_price, $product_3_price,
                                                 $product_1_name, $product_2_name, $product_3_name) . "₽</td>";
                echo "</tr>";  
                echo "</tr>";
                    echo "<th>Самый дешевый</th>";
                    echo "<td>" . findMinProduct($product_1_price, $product_2_price, $product_3_price,
                                                 $product_1_name, $product_2_name, $product_3_name) . "₽</td>";
                echo "</tr>";                               
            echo "</tfoot>";
        echo "</table>";
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
        <?php
        /* Задание № 2 */
        echo "<b>Задание № 2</b><br>";
        
        /* Объявление переменных для паролей
           Где $password_main - пароль
        */        
        $password_main  = "parol_!2345";
        
        /* Функция checkByRequiredPass
           позволяет найти схожесть паролей
           Если передавать значения напрямую, то результат будет аналогичным
        */
        function checkByRequiredPass($password_main){
            $result_message = "";        
            $password_required = "parol_!2345";      
            if ($password_main == $password_required) {
                return $result_message = "Ваш пароль верный";
            } else {
                return $result_message = "Найденны отличия в паролях!";
            }
        }
        echo "Ваш пароль - " . $password_main . "<br>";
        echo checkByRequiredPass($password_main);       
         
        ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
        <?php
        /* Задание № 3 */
        echo "<b>Задание № 3</b>";

        //ГОД => ЦЕНА => ИНФЛЯЦИЯ
        $i = 0;
        $main_price = 100;
        $yearArr = array();
        $priceArr = array();
        $inflac = array();
        // цикл while для решения
        while($main_price < 150) {
            if(!$i) {
                $main_price += $main_price * 0.1;
                //echo "<u>В конце года:  </u>" . $main_price . 'руб. <br/>';
            } else {
                $main_price += $main_price * 0.035;
                //echo "$i год/лет =>" . $main_price . 'руб. <br/>';
            }
            $i++;
            array_push($yearArr, $i);
            array_push($priceArr, round($main_price, 2));
            array_push($inflac, "3.5%");
        }
        array_unshift($inflac, "10%");
        array_pop($inflac);
        echo "<br>";
        //echo var_dump($inflac);


        $main_price = 100;
        // цикл for, но такой же реализацией 
        for($i = 0; $main_price < 150; $i++) {
            if(!$i) {
                $main_price += $main_price * 0.1;
                //echo "В конце года:  ".$main_price.'руб. <br/>';
            } else {
                $main_price += $main_price * 0.035;
                //echo "Через $i года(-а, лет):  ".$main_price.'руб. <br/>';
            }
        }

        // Снижение цены на 3.5%, которая достигла 170р
        $other_price = 170;
        $other_yearArr = array();
        $other_priceArr = array();
        $other_inflac = array();
        for ($i = 1; $i <= 10; $i++) {
            $other_price -= $other_price * 0.035;
            array_push($other_yearArr, $i);
            array_push($other_priceArr, round($other_price, 2)); // round округляет число на заданное n
            array_push($other_inflac, "3.5%");
        }

        ?>

<span style="font-size: 20px; text-decoration: underline;">цилом while:</span><br>
<div style="display: flex;">
    <table>
        <tr>
            <th>Год</th>
        </tr>
        <tr>
            <?php
            foreach ( $yearArr as $elem ) {
                echo "<td>" . $elem . "</td></tr>";
            }        
            ?>  
        </tr>
    </table>
    <table>
        <tr>
            <th>Цена</th>
        </tr>
        <tr>
            <?php
            foreach ( $priceArr as $elem ) {
                echo "<tr><td>" . $elem . "</tr></tr>";
            }
            ?>
        </tr>
    </table>
    <table>
        <tr>
            <th>Инфляция</th>
        </tr>
        <tr>
            <?php         
            foreach ( $inflac as $elem ) {
                echo "<tr><td>" . $elem . "</tr></tr>";       
            }
            ?>
        </tr>
    </table>       
</div>


<div style="display: flex;">
    <table>
        <tr>
            <th>Год</th>
        </tr>
        <tr>
            <?php
            $ite = 0;
            foreach ( $yearArr as $elem ) {
                echo "<td>" . $elem . "</td></tr>";
                $ite++;
                if ($ite >= 5) break;
            }        
            ?>  
        </tr>
    </table>
    <table>
        <tr>
            <th>Цена</th>
        </tr>
        <tr>
            <?php
            $ite = 0;            
            foreach ( $priceArr as $elem ) {
                echo "<tr><td>" . $elem . "</tr></tr>";
                $ite++;
                if ($ite >= 5) break;                
            }
            ?>
        </tr>
    </table>
    <table>
        <tr>
            <th>Инфляция</th>
        </tr>
        <tr>
            <?php
            $ite = 0;            
            foreach ( $inflac as $elem ) {
                echo "<tr><td>" . $elem . "</tr></tr>";
                $ite++;
                if ($ite >= 5) break;                
            }
            ?>
        </tr>
    </table>   
</div>

<span style="font-size: 20px; text-decoration: underline;">снижение</span><br>
<div style="display: flex;">
    <table>
        <tr>
            <th>Год</th>
        </tr>
        <tr>
            <?php
            foreach ( $other_yearArr as $elem ) {
                echo "<td>" . $elem . "</td></tr>";
            }        
            ?>  
        </tr>
    </table>
    <table>
        <tr>
            <th>Цена</th>
        </tr>
        <tr>
            <?php
            foreach ( $other_priceArr as $elem ) {
                echo "<tr><td>" . $elem . "</tr></tr>";
            }
            ?>
        </tr>
    </table>
    <table>
        <tr>
            <th>Инфляция</th>
        </tr>
        <tr>
            <?php         
            foreach ( $other_inflac as $elem ) {
                echo "<tr><td>" . $elem . "</tr></tr>";       
            }
            ?>
        </tr>
    </table>       
</div>
</div>
</div> 
<div id="phpDiv" style="margin-top: 20px;"  >
    <div class="center">
        <?php
        /* Задание № 5 */
        echo "<b>Задание № 5</b><br>";
        // создаем индексированный список с 5ю элементами
        echo "<u>Созданный массив -></u> ";
        $productNameArr =  array("Монитор", "Мышь", "Принтер", "Оперативная память", "Сканер");
        print_r($productNameArr);
        echo "<br>";
        
        echo "<u>В массив добавлен новый элемент -></u> ";
        $productNameArr[] = "Клавиатура";
        print_r($productNameArr);

        echo "<br><u>Число элементов массива =</u> " . count($productNameArr) . "<br>";
        
        echo "<u>Название элементов через foreach -></u> ";
        foreach($productNameArr as $ite) {
            echo $ite . " ";
        }

        echo "<br><u>Сортировка массива по алфавиту -></u> ";
        sort($productNameArr);
        foreach($productNameArr as $ite) {
            echo $ite . " ";
        }
        ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;"  >
    <div class="center">
        <?php
        /* Задание № 6 */
        echo "<b>Задание № 6</b><br>";

        // с помощью array()
        $keyArray_products = array("Монитор" => 500, "Оперативная память" => 350, "Клавиатура" => 94);
        // операторе присваивания
        $keyArray_products["Принтер "] = 692;
        $keyArray_products["Сканер"] = 38;
        print_r($keyArray_products);

        echo "<br><u>Количество товаров -></u> " . count($keyArray_products);
        echo "<br><u>Суммарная стоимость -></u> " . array_sum($keyArray_products);

        echo "<br><u>Сортировка в порядке убывания -></u> ";
        arsort($keyArray_products);
        foreach($keyArray_products as $ite) {
            echo $ite . " ";
        }

        echo "<br><u>Сортировка в порядке возрастания -></u> ";
        asort($keyArray_products);
        foreach($keyArray_products as $ite) {
            echo $ite . " ";
        }

        echo "<br><u>Сортировка массива(ключей) по алфавиту -></u> ";
        ksort($keyArray_products);
        foreach($keyArray_products as $ite => $value) {
            echo $ite . " ";
        }
        ?>
    </div>
</div>  
<div id="phpDiv" style="margin-top: 20px;"  >
    <div class="center">
        <?php
        /* Задание № 7 */
        echo "<b>Задание № 7</b><br>";
        
        $user_name = "Захар";
        $user_educ = "Студент";
        $user_status = "Начинающий разработчик";
        
        echo "<p style=\"text-align: left; margin-bottom: 0px\">";
        echo "Я - $user_name, $user_status.<br> 
              В данный момент я $user_educ и работаю над решением задач, используя<br> язык программирования PHP. 
              <br>Этот язык мне нравится, потому что он прост в изучении и позволяет создавать<br> функциональные и интересные веб-проекты. 
              <br>Моя цель - стать лучшим в своей профессии и помочь другим программистам.";
        echo "</p>";
        echo "<p style=\"font-size: 20px; text-decoration: underline; text-align: left; margin-bottom: 0px; margin-top: 0px;\">данный текст был написан с помозью функции echo</p>";
        ?>
        
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;"  >
    <div class="center">
        <?php
        /* Задание № 8 */
        echo "<b>Задание № 8</b><br>";
        
        // Массив 16-ричных значений  
        $hexValues = ['00', 'FF'];

        // Массив для названий
        $colorNames = [];

        foreach ($hexValues as $red) {
            foreach ($hexValues as $green) {
                foreach ($hexValues as $blue) {
                    // Создаем шестнадцатеричный код путем объединения компонентов RGB
                    // красного - зеленого - синего
                    $hexCode = $red . $green . $blue;

                    // Является ли компонент RGB не нулевым 
                    $isRed = ($red === 'FF' && $green === '00' && $blue === '00');
                    $isGreen = ($red === '00' && $green === 'FF' && $blue === '00');
                    $isBlue = ($red === '00' && $green === '00' && $blue === 'FF');

                    if ($isRed || $isGreen || $isBlue) {
                        // С помощью тернарного операотора присваиваем название цвета
                        $colorName = $isRed ? 'Red' : ($isGreen ? 'Green' : 'Blue');
                        $colorNames[$colorName] = $hexCode;
                    }
                }
            }
        }

        echo '<table border="1">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Название цвета</th>';
        echo '<th>Hex Code</th>';
        echo '<th>Цвет</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        // Построение строки с помощью цикла
        foreach ($colorNames as $colorName => $hexCode) {
            echo '<tr>';
            echo '<td>' . $colorName . '</td>';
            echo '<td>' . $hexCode . '</td>';
            echo '<td style="background-color: #' . $hexCode . '; width: 100px; height: 50px;"></td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</body>';
        echo '</html>';
        ?>
    </div>
</div>  
<div id="phpDiv" style="margin-top: 20px;"  >
    <div class="center">
        <?php
        /* Задание № 9 */
        echo "<b>Задание № 9</b><br>";

        // Заданное число n
        $n = 50;
        echo "<u>Дано n =</u> $n <br>";
        $randNummArr = [];
        for($i = 0; $i<=5; $i++) {
            $randNummArr[$i] = rand(1,15);
        }
        echo "<u>Дан массив -></u> ";
        print_r($randNummArr);
        if (array_sum($randNummArr) <= $n) {
            echo "<br><u>Сумма чисел меньше или равное n =</u> " . array_sum($randNummArr);
        } else {
            echo "<br><u>Сумма чисел больше заданного n =</u> " . array_sum($randNummArr);
        }
        ?>
    </div>
</div>        
</body>
</html>
