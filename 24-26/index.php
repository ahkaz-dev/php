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
        $votes = array();
        $file = "";
        echo "<b>Задание № 1</b><br>";
        
        if (isset($_POST['vote'])) {
            $value = $_POST['vote'];
            $file = $value . ".txt";
            $f = fopen($file, "r");
        
            $votes[$value] = fread($f, 100);
            $votes[$value]++;
        
            $f = fopen($file, "w");
            fwrite($f, $votes[$value]);
            fclose($f);
        }
        
        // Задаем начальное количество голосов для каждого варианта ответа
        if (!isset($votes[5])) $votes[5] = 0;
        if (!isset($votes[4])) $votes[4] = 0;
        if (!isset($votes[3])) $votes[3] = 0;
        if (!isset($votes[2])) $votes[2] = 0;
        
        
        if (isset($_POST['vote'])) {
            // Перенаправление на новую страницу
            header('Location: result.php');
            exit();
        }
        
    ?>
    <form action="" method="post">
    <label for="">Как вы оцениваете "что-то"?</label><br>
        <input type="radio" name="vote" value=5> Отлично <br>
        <input type="radio" name="vote" value=4> Хорошо <br>
        <input type="radio" name="vote" value=3> Удовлетворительно <br>
        <input type="radio" name="vote" value=2> Плохо <br>
    <input type="submit">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 2
        echo "<b>Задание № 2</b><br>";
        $userName = "";
        $userTel = "";
        $userTelhome = "";
        $resultStr = "";


        if (isset($_POST['userName']) & isset($_POST['userTel'])) {   
            if (!empty($_POST['userName']) & !empty($_POST['userTel'])) {
            $userName = $_POST['userName'];
            $userTel = $_POST['userTel'];    
            $userTelhome = $_POST['userTelhome'];  
            
            $resultStr = $userName . ", " . $userTel . ", " . $userTelhome;
            $myfile = fopen("newfile.txt", "a");
            fwrite($myfile, $resultStr . "\n");
            fclose($myfile);
            
            header('Location: telephone-IS.php');
            exit();
            }
        }
    ?>
    <form method="POST">
        <label >Введите данные</label><br>
        <label for="userName">Ваше имя </label>
            <input type="text" name="userName" id="" maxlength=15 pattern="[А-Я]{1}[а-я]{4,15}" value="Захар"><br><br>
        <label for="userTel">Ваш рабочий номер телефона<br /> <small style="font-size: 20px; color: green;">Пример: 1 234 567 89 01</small></label>
            <input type="tel" name="userTel" id="" maxlength=15 pattern="[0-9]{1} [0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" value="1 234 567 89 01"><br><br>
        <label for="userTel">Ваш домашний номер телефона<br><small style="font-size: 20px; color: green;">Пример: 1 234 567 89 01</small></label>
            <input type="tel" name="userTelhome" id="" maxlength=15 pattern="[0-9]{1} [0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2}" value="1 234 567 89 01"><br><br>
            <input type="submit">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 3
        echo "<b>Задание № 3</b><br>";

        if (isset($_GET['user_link'])) {   
            if (!empty($_GET['user_link'])) {
                $user_link = $_GET['user_link'];
                $file_headers = @get_headers($user_link);
                if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {
                    $exists = false;
                    echo "<font color='red'>Данный url невозможно открыть!</font>";
                }
                else {
                    $exists = true;
                    echo "<font color='green'>Данный url работает</font>";
                }
            }
        }
    ?>
    <form action="" method=get>
        Введите url <input type="text" name="user_link" id="" value="http://"><br>
        <input type="submit">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        // Задание 4
        // echo "<b>Задание № 4</b><br>";

        // $user_city = "Moscow";
        // $img = "";
        // if (isset($_GET['user_city'])) {   
        //     if (!empty($_GET['user_city'])) {
        //         $user_city = $_GET['user_city'];
        //         $path  = "https://api.openweathermap.org/data/2.5/weather?q=" . $user_city . "&appid=0c98dfa1ae29c1e4b4b7edb706d76649&lang=ru";
        //     }
        // } else {
        //     $path  = "https://api.openweathermap.org/data/2.5/weather?q=" . $user_city . "&appid=0c98dfa1ae29c1e4b4b7edb706d76649&lang=ru";

        // }
        // // путь к запросу на сервер по получению погоды
        // // получаем содержимое страицы по заданному пути
        // $response = (file_get_contents($path));
        // // распарсим json на массив 
        // $resultArr = json_decode($response, TRUE);
        
        // echo "Погода в $user_city: " . $resultArr["weather"][0]['description'];
        // switch($resultArr["weather"][0]['description']) {
        //     case "ясно": echo "<img src=\"https://openweathermap.org/img/wn/01d@2x.png\" style=\"width: 70px;filter: drop-shadow(0px 15px 28px orange);\">"; break;
        //     case "пасмурно": echo "<img src=\"http://openweathermap.org/img/wn/03d@2x.png\" style=\"width: 70px;filter: drop-shadow(0px 15px 28px #000000);\">"; break;
        //     case "дождь": echo "<img src=\"http://openweathermap.org/img/wn/10d@2x.png\" style=\"width: 70px;filter: drop-shadow(0px 15px 28px #000000);\">"; break;
    
        // }
        // echo "<br>";
        // $feelliketemp = $resultArr["main"]['feels_like'];
        // echo "Средняя температура: " . substr($feelliketemp, 0, 2);
  ?>
      <form action="" method=get>
        Введите ваш город <input type="text" name="user_city" id=""><br><br>
        <input type="submit">
    </form>
    </div>

</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        session_start(); // Начинаем сессию для хранения оставшейся памяти

        // Максимальный объем памяти (в мегабайтах)
        $maxMemoryMB = 10; // 5MB
        $maxMemoryBytes = $maxMemoryMB * 1024 * 1024; // Переводим в байты

        // Переменная для хранения оставшейся памяти в мегабайтах
        $remainingMemoryMB = isset($_SESSION['remainingMemoryMB']) ? $_SESSION['remainingMemoryMB'] : $maxMemoryMB;

        // Разрешенные типы файлов
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

        // Функция для получения текущей директории
        function getUploadDirectory() {
            return __DIR__;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['uploadedFile'])) {
            $file = $_FILES['uploadedFile'];
            $fileSizeMB = $file['size'] / (1024 * 1024); // Размер файла в мегабайтах
            $fileType = mime_content_type($file['tmp_name']); // Получаем MIME-тип загруженного файла

            // Проверяем размер файла
            if ($fileSizeMB > $remainingMemoryMB) {
                echo "Недостаточно памяти для загрузки файла.";
            } elseif (!in_array($fileType, $allowedTypes)) {
                echo "Недопустимый тип файла. Разрешены только изображения (jpg, jpeg, png, gif).";
            } else {
                // Путь для сохранения файла
                
                $uploadPath = getUploadDirectory() . "\uploader" . '/' . basename($file['name']);

                if (file_exists($uploadPath)) {
                    echo "Файл с таким именем уже существует. Пожалуйста, загрузите файл с другим именем.";
                } else {
                    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
                        $remainingMemoryMB -= $fileSizeMB;
                        $_SESSION['remainingMemoryMB'] = $remainingMemoryMB;

                        echo "Файл успешно загружен и сохранен в: " . $uploadPath;
                    } else {
                        echo "Ошибка при сохранении файла.";
                    }
                }
            }
        }
    ?>
    <h1>Загрузите изображение</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="uploadedFile" accept="image/jpeg, image/png, image/gif" required>
        <button type="submit">Загрузить</button>
    </form>
    <p>Оставшаяся память: <?php echo round($remainingMemoryMB, 2); ?> MB</p>
    <form action="file-upload.php" method="get">
        <button type="submit">Посмотреть файлы</button>
    </form>
    </div>
</div>
</body>
</html>
