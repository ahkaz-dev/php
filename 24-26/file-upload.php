<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результат</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <p class="LtoSecondPart">
        <a href="index.php">Вернуться обратно</a>
    </p>
    <?php
        $path = __DIR__ . "\uploader";
        $fileArray = scandir($path);
        $file = isset($_GET['fileId']) && isset($_GET['fileId']) > 1 ? $_GET['fileId'] : null;
        print_r($fileArray);
        echo "<br>";

        // if (isset($_GET['fileId']) && array_search($_GET['fileId'],scandir($path))) {
        
        if (isset($_GET['fileId']) && $file != null) {
            unlink($path . '/' . $fileArray[$file]);
            echo "Файл был удален \ " . $fileArray[$file];

            header("Refresh:0");
        } else if (empty($_GET['fileId'])) echo "";
        else echo "Файл с таким id отсутствует";
    ?>
    <form action="" method="get">
        Введите id файла <input type="text" name="fileId">
        <br>
        <button type="submit">Удалить файл</button>
    </form>
</body>
