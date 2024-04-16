<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 24-26</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        // Задание 1

        $color = "white";
        $vline;
        echo "<b>Задание № 1</b><br>";    

        if (isset($_POST['vote'])){

        $file = $_POST['vote'].".txt";

        $f = fopen($file,"r");

        $votes = fread($f,100);

        $votes++;


        $f = fopen($file,"w");
        fwrite($f,$votes);
        fclose($f);

        //$color = "#FF0000";
        }

    ?>
    <form action="" method="post">
    <input type="radio" name="vote" value=5> 5-35 чел.
    <hr align="left" color="<?= $color ?>" size="20" width="<?=$votes?>">
    <input type="radio" name="vote" value=4> 4-6 чел.
    <hr align="left" color="<?= $color ?>" size="20" width="<?=$votes?>">
    <input type="radio" name="vote" value=3> 3-7 чел.
    <hr align="left" color="<?= $color ?>" size="20" width="<?=$votes?>">
    <input type="radio" name="vote" value=2> 2-10 чел.
    <hr align="left" color="<?= $color ?>" size="20" width="<?=$votes?>">
    
    <input type="submit">
    </form>
    </div>
</div>
</body>
</html>