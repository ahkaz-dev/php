<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр3-4</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <?php
    /* Работа с массивами */
    echo "<b>Работа с массивами</b><br>";

    $arr=['a', 'b', 'c'];
    echo "<br>" . var_dump($arr);

    echo $arr[0] . $arr[1] . $arr[2];

    $arr=['a', 'b', 'c', 'd'];
    echo "<br>  " . $arr[0] . "+" . $arr[1] . ", " . $arr[2] . "+" . $arr[3];

    $arr = [2,5,3,9];
    echo "<br>" . $result = $arr[0] * $arr[1] + $arr[2] * $arr[3];

    $arr;
    $arr[0] = 1;
    $arr[1] = 2;
    $arr[2] = 3;
    $arr[3] = 4;
    $arr[4] = 5;

    /* Ассоциативные массивы */
    echo "<br><b>Ассоциативные массивы</b>";
    
    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    echo "<br>" . $arr['c'] ;

    $arr = ['a'=>1, 'b'=>2, 'c'=>3];
    echo '<br>' . $arr['a'] +  $arr['b'] + $arr['c'];

    $arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
    echo '<br>' . "Зарплата Пети = " . $arr['Петя'] . ", Зарплата Коли = " . $arr['Коля'];

    $dayOfWeek = ['1'=>'Понедельник', '2'=>'Вторник',
                '3'=>'Среда','4'=>'Четверг','5'=>'Пятница',
                '6'=>'Суббота','7'=>'Воскресенье'];
    echo '<br>' . "Сегодня = " . $dayOfWeek['5'];

    $day = 3;
    echo '<br>' . $dayOfWeek[$day];

    /* Многомерные массивы */
    echo "<br><b>Многомерные массивы</b>";

    $arr = [
        'cms'=>['joomla', 'wordpress', 'drupal'],
        'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
        ];        
    echo '<br>'. $arr['cms'][0] . ' ' . $arr['cms'][2] . ' ' . $arr['colors']['green'] . ' ' . $arr['colors']['red'];

    $langArr = [
        'ru' => [1=>'Понедельник', 'Вторник',
                 'Среда', 'Четверг', 'Пятница',
                 'Суббота','Воскресенье'],  
        'en' => [1=>'Monday', 'Tuesday',
                'Wednesday', 'Thursday', 'Friday',
                'Saturday','Sunday']
    ];
    echo '<br>'. $langArr['ru'][1] . " " . $langArr['en'][3];

    $lang = 'ru';
    $day = 3;
    echo '<br>'. $langArr[$lang][$day];
    ?>
    </div>
</div>
</body>
</html>