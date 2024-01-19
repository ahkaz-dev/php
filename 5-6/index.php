<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр5-6</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
    <?php
    /* Работа с if-else */
    echo "<b>Работа с if-else</b><br>";

    $a = 0;
    if ( $a == 0 ){ 
        echo "true";
    } else{
        echo "false";
    }
    echo "<br>";

    $a = -3;
    if ( $a > 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = 5;
    if ( $a < 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = 0;
    if ( $a >= 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = 5;
    if ( $a <= 0 ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = "tEst";
    if ( $a == "Test" ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";

    $a = '1';
    if ( $a == '1' ){ 
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";
    /* Работа с empty и isset */
    echo "<b>Работа с empty и isset</b><br>";
    
    $a = "1";
    if (empty($a)) {
        echo "true";
    } else {
        echo "false";
    }
    echo "<br>";

    $a = "";
    if (!empty($a)) {
        echo "true";
    } else {
        echo "false";
    }
    ?>
    </div>
</div>
</body>
</html>