<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 11-12(часть 1)</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
        <p class="LtoSecondPart">
            <a href="/11-12/index_first.php">Вторая часть</a>
        </p>
    <?php
        /* Работа с регистром символов */
        echo "<b>Работа с регистром символов</b><br>"; 
        
        $str = "php";
        echo strtoupper($str);

        echo "<br>";

        $str = "PHP";
        echo strtolower($str);

        echo "<br>";

        $str = "london";
        echo ucfirst($str);

        echo "<br>";

        $str = "London";
        echo lcfirst($str);

        echo "<br>";

        $str = "london is the capital of great britain";
        $arrStr = explode(" ", $str);
        foreach ($arrStr as $k => $v) {
            echo ucfirst($v) . " ";
        }

        echo "<br>";

        $str = "LONDON";
        echo ucfirst(strtolower($str));

        echo "<br><br>";

        /* Работа с substr */
        echo "<b>Работа с substr</b><br>";
        
        $str = "html css php";
        echo substr($str, 0, 5);
        echo substr($str, 5, -3);
        echo substr($str, 9);

        echo "<br>";

        $str = "Hello World!";
        echo substr($str, -3);

        echo "<br>";

        $str = "http://bip-online.ru/";
        if (substr($str, 0,7) == "http://") {
            echo "Да";
        } else {
            echo "Нет";
        }

        echo "<br>";

        $strTwoTest = "https://spobip-bel.ru/";
        if (substr($strTwoTest,0,7) == "https://" or substr($strTwoTest,0,8) == "https://") {
            echo "Да";
        } else {
            echo "Нет";
        }

        echo "<br>";

        $str = "hello-world.png";
        if (substr($str,-4) == ".png" or substr($str,-4) == ".jpg" ) {
            echo "Да";
        } else {
            echo "Нет";
        }

        echo "<br>";
        
        $str = "StringTest";
        if (strlen($str) >= 5 ) {
            echo substr($str, 0, 5) . "...";
        } else {
            echo $str;
        }

        echo "<br><br>";

        /* Работа с str_replace */
        echo "<b>Работа с str_replace</b><br>";
        
        $str = "31.12.2013";
        echo str_replace(".","-",$str);

        echo "<br>";

        $str = "a hellocd waordlbcd!";
        for( $i = 0; $i < strlen($str); $i++ ) {
            if ( $str[$i] == 'a') {
                $str[$i] = str_replace('a','1',$str[$i]);
            } else if ( $str[$i] == 'b') {
                $str[$i] = str_replace('b','2',$str[$i]);
            } else if ( $str[$i] == 'c') {
                $str[$i] = str_replace('c','3',$str[$i]);
            } else {
                $str;
            }
        }
        echo $str;

        echo '<br>';

        $str = "1a2b3c4b5d6e7f8g9h0";
        $num = [0,1,2,3,4,5,6,7,8,9];
        $str = str_replace($num, "", $str);
        echo $str;

        echo "<br>";
        
        $str = "abcd";
        if (stristr($str,'a')) {
            $str = str_replace('a',1,$str);
        }  
        if (stristr($str,'b')) {
            $str = str_replace('b',2,$str);
        }  
        if (stristr($str,'c')) {
            $str = str_replace('c',3,$str);
        } else {
            $str;
        }
        echo $str;

        echo "<br><br>";

        /* Работа с substr_replace */
        echo "<b>Работа с substr_replace</b><br>";   
        
        $str = "Hello World!";
        echo substr_replace($str,"!!!",0,3);

        echo "<br><br>";

        /* Работа с strpos, strrpos */
        echo "<b>Работа с strpos, strrpos</b><br>";   

        $str = "abc abc abc";
        echo strpos($str,"b");

        echo "<br>";
        
        echo strrpos($str,"b");

        echo "<br>";

        echo strpos($str,"b", 3);

        echo "<br>";

        $str = "aaa aaa aaa aaa aaa";
        echo strpos($str," ", 4);

        echo "<br>";

        $str = "Hello..World!";
        echo strpos($str,"..")? "Есть две точки подряд": "Нет две точки подряд";

        echo "<br>";
        
        echo strpos($strTwoTest,"https://") ? "Нет" : "Да";

        echo "<br><br>";

        /* Работа с explode, implode */
        echo "<b>Работа с explode, implode</b><br>";
        
        $str = "html css php";
        $words = explode(" ", $str);
        echo print_r($words);

        echo "<br>";

        $wordline = implode(" ", $words);
        echo $wordline;

        echo "<br>";

        $date = "2013-12-31";
        $dateArr = explode("-", $date);
        $dateArr = array_reverse($dateArr);
        $date = implode(".", $dateArr);
        echo $date;

        echo "<br><br>";

        /* Работа с str_split */
        echo "<b>Работа с str_split</b><br>";

        $str = "1234567890";
        echo print_r(str_split($str,2));

        echo "<br>";

        $str = "1234567890";
        echo print_r(str_split($str,1));

        echo "<br>";

        $str = "1234567890";
        $strArr = str_split($str,2);
        $str = implode("-",$strArr);
        echo $str;
        
        ?>
    </div>
</div>    
</body>
</html>