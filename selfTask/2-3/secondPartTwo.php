<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 2-3(Часть 2)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="../selfTask/second.php">Первая часть</a>
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
            $firstelem = array_shift($arr);
            $lastElem = array_pop($arr);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';
    
            $arr = [1, 2, 3, 4, 5];
            $firstelem = array_unshift($arr, 0);
            $lastElem = array_push($arr, -6);
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            $arr = [1, 2, 3, 4, 5, 6, 7, 8];

            foreach($arr as $elem) {
                echo $firstelem = array_shift($arr);
                echo $lastElem = array_pop($arr);
            }
            echo '<br>';

            /* Работа с array_pad, array_fill, array_fill_keys, array_chunk */
            echo "<b>Работа с array_pad, array_fill, array_fill_keys, array_chunk</b><br>";
            
            $arr = ['a', 'b', 'c'];
            $arr = array_pad($arr, 6, '-');
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            $arr = array_fill(0,10,'x');
            foreach($arr as $elem) {
                echo $elem . ' ';
            }
            echo '<br>';

            $arr = range(0,20);
            $arr = array_chunk($arr,5,true);
            print_r($arr) ;
            echo '<br>';

            /* Работа с array_count_values */
            echo "<b>Работа с array_count_values</b><br>";  

            $arr = [ 'a', 'b', 'c', 'b', 'a'];
            $a = array_count_values($arr);
            print_r($a);  
            
            echo '<br>';

            /* Работа с array_map */
            echo "<b>Работа с array_map</b><br>";  

            function cube($n)
            {
                return (sqrt($n));
            }            
            $arr = [ 1, 2, 3, 4, 5,6    ];
            $arr = array_map('cube',$arr);
            print_r($arr);

            echo '<br>';

            function delete_tags($n)
            {
                return (strip_tags($n));
            }    
            $arr = ['<b>php</b>', '<i>html</i>'];
            $arr = array_map('delete_tags',$arr);
            print_r($arr);

            echo '<br>';

            $arr = [' a ', ' b ', ' с '];
            function delete_space($n)
            {
                return (trim($n));
            }
            $arr = array_map('delete_space',$arr);
            print_r($arr);

            echo '<br>';  

    ?>
    </div>
</div>        
</body>
</html>
