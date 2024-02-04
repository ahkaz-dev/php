<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 11-12(часть 2)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
        <p class="LtoSecondPart">
            <a href="/11-12/index.php">Первая часть</a>
        </p>
    <?php
        /* Работа с trim, ltrim, rtrim */
        echo "<b>Работа с trim, ltrim, rtrim</b><br>";  
        
        $str = " Hello World! This is Php! ";
        echo var_dump($str);
        echo "<br>";
        $trimmed = trim($str);
        echo var_dump($trimmed);

        echo "<br><br>";

        $str = "/php/";
        echo var_dump($str);
        echo "<br>";
        echo var_dump(trim($str, "\\/"));

        echo "<br><br>";

        $str = "слова слова слов";
        echo var_dump($str);
        echo "<br>";
        echo var_dump( str_ends_with($str,".") ? $str : substr_replace($str,".",strlen($str)) );

        echo "<br><br>";

        /* Работа с strrev */
        echo "<b>Работа с strrev</b><br>";
        
        $str = "12345";
        echo strrev($str);

        echo "<br>";

        $str = "madam";
        $reverse = strrev($str);
        echo ($str == $reverse) ? "Да" : "Нет";

        echo "<br><br>";

        /* Работа с str_shuffle */
        echo "<b>Работа с str_shuffle </b><br>";

        $str = "Hello World!";
        echo str_shuffle($str);

        echo "<br>";

        $str = "";
        $letter = "abcdefghijklmnopqrstuvwxyz";
        for ($i = 0; $i < 6; $i++){
            $str .= str_shuffle($letter);
        }
        $str = substr($str,0,6);
        echo $str;

        echo "<br><br>";

        /* Работа с number_format */
        echo "<b>Работа с number_format</b><br>";
        
        $str = "12345678";
        echo number_format($str,0,""," ");

        echo "<br><br>";

        /* Работа с str_repeat */
        echo "<b>Работа с str_repeat</b><br>";
        
        for($i = 0; $i < 9; $i++){
            for($j = 1; $j < 9;){
                echo str_repeat("x",$i) . str_repeat("x", $j) . "<br>"; break;
            }
        }

        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < 10;){
                echo str_repeat($i,$i) . str_repeat($i, $j) . "<br>"; break;
            }
        }

        echo "<br>";

        /* Работа с strip_tags и htmlspecialchars */
        echo "<b>Работа с strip_tags и htmlspecialchars</b><br>";
        
        $str = "html, <b>php</b>, js";
        echo strip_tags($str);

        echo "<br>";

        $str = "<i>java, <del><b>python</del></i>, php</b>";
        echo strip_tags($str,"<del>,<i>");

        echo "<br>";

        $str = "html, <b>php</b>, js";
        echo HTMLSPECIALCHARS($str);

        echo "<br><br>";

        /* Работа с chr и ord */
        echo "<b>Работа с chr и ord</b><br>";

        $chars = ['a','b','c',' '];
        foreach($chars as $elem => $elem_count){
            echo ord($elem_count) . "<br>";
        }

        echo "<br>";

        echo "Границы англ. алфавита = " . ord("A") . '-' . ord("Z");
        echo "<br>";
        echo "Границы англ. алфавита = " . ord("a") . '-' . ord("z");

        echo "<br>";

        echo chr(33);

        echo "<br>";

        $str = chr(86);
        echo $str;

        echo "<br>";

        $str = "";
        for($len = 97; $len < 122; $len++){
            $str .= chr($len);
            $str = str_shuffle($str);
        }
        echo $str = substr($str,0,6);

        echo "<br>";

        $letter = 'h';
        if ( ord($letter) >= 65 and ord($letter) <= 90) {
            echo "Буква " . $letter . " большая";
        } else if ( ord($letter) >= 97 and ord($letter) <= 122) {
            echo "Буква " . $letter . " маленькая";
        }

        echo "<br><br>";

        /* Работа с strchr, strrchr */
        echo "<b>Работа с strchr, strrchr</b><br>";

        $str = "ab-cd-ef";
        echo $str = strchr($str,'-');

        echo "<br>";

        echo $str = strrchr($str,"-");

        echo "<br><br>";

        /* Работа с strstr */
        echo "<b>Работа с strstr</b><br>";
        
        $str = "ab--cd--ef";
        echo $str = strstr($str,"-");

        echo "<br><br>";

        /* Задачи */
        echo "<b>Задачи</b><br>";
        
        $str = "var_test_text";
        $word = explode("_",$str);
        $result;
        foreach($word as $key => $value) {
            if ($key == 0 ) {
                $result .= $value;
            } else if ($key != 0) {
                $value = ucfirst(strtolower($value));
                $result .= $value;
            }
        }
        print_r($word);
        echo "<br>";
        echo $result;

        echo "<br>";

        $number = [10,237,-100,515,43,953,869];
        foreach($number as $key => $value) {
            if ( ($value % 10 == 3) or ($value / 10 % 10 == 3) or ($value / 10 / 10 == 3) ) {
                echo $value . " ";
            } 
        }    
    ?>
    </div>
</div>
</body>
</html>