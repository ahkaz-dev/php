<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 2-3(Часть 2)</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="/selfTask/2-3/second.php">Первая часть</a>
    </p>
    <?php
            /* Работа с shuffle */
            echo "<b>Работа с shuffle</b><br>";
            
            $arr = [1,2,3,4,5,6];
            shuffle($arr);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            $arr = range(1,25);
            shuffle($arr);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            $arr = range('a','z');
            shuffle($arr);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            $i = 0;
            $arr = [];
            while ( $i < 6) {
                $arr += range('a','z');                
                $i++;
            }
            shuffle($arr);
            $str = implode('', $arr);
            $str = substr($str,0,6);
            echo var_dump($str);
            echo "<br>";

            /* Работа с array_unique */
            echo "<b>Работа с array_unique </b><br>";

            $arr = ['a', 'b', 'c', 'b', 'a'];
            $arr = array_unique($arr);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            /* Работа с array_shift, array_pop, array_unshift,array_push */
            echo "<b>Работа с array_shift, array_pop, array_unshift,array_push</b><br>";
            
            $arr = [1, 2, 3, 4, 5];
            
    ?>
    </div>
</div>        
</body>
</html>