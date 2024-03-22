<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 13-15</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
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
<div id="phpDiv">
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
<div id="phpDiv">
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
            array_push($priceArr, $main_price);
            array_push($inflac, 0.035);
        }
        array_unshift($inflac, 0.1);
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
        ?>

<span style="font-size: 15px;">цилом while:</span><br>
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

<span style="font-size: 15px;">цилом for:</span><br>
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

</div>
</div>  
</body>
</html>
