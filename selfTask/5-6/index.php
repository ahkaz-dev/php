<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ср 5-6</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv">
    <div class="center">
        <?php
            /* Формы */
            echo "<b>Формы</b><br><br>";

            $justName;
            if (!empty($_REQUEST['justName'])) {
                $justName = $_REQUEST['justName'];
                echo "Привет, " . $justName . "!";
            }
        ?>

        <form action="" method="GET">  
            Имя <input type="text" name="justName">
            <input type="submit"> 
        </form>
        <br>
        
        <?php            
            function mb_ucfirst($string, $encoding){
                $firstChar = mb_substr($string, 0, 1, $encoding);
                $then = mb_substr($string, 1, null, $encoding);
                return mb_strtoupper($firstChar, $encoding) . $then;
            }
            
            $name;
            $age;
            $message;
            if (!empty($_REQUEST['name']) and !empty($_REQUEST['age']) and !empty($_REQUEST['userMessage'])) {
                // Получаем данные из таблицы по запросу name
                // удаляем все html теги
                $name = strip_tags($_REQUEST['name']);
                $name = mb_ucfirst($name, "utf8");
                $message = strip_tags($_REQUEST['userMessage']);
                $message = mb_ucfirst($message, "utf8");

                // Получаем данные из таблицы по запросу age
                // удаляем все html теги
                $age = strip_tags($_REQUEST['age']);
                echo "Привет, " . $name . ", " . $age . " лет.";
                echo "<br>Твое сообщение: " . $message;  
            }            
        ?>
        <form action="" method="GET">  
            Имя <input type="text" name="name">
            Возраст <input type="text" name="age">
            <p></p> 
            Сообщение <textarea name="userMessage" rows="1" cols="22"></textarea>
            <input type="submit"> 
        </form>

        <?php
        $login = "myLogin_123";
        $userLogin;
        $pass = "1234qwerty";
        $userPass;
        if (!empty($_REQUEST['login']) && !empty($_REQUEST['password'])) {
            $userLogin = $_REQUEST['login'];
            $userLogin = trim($userLogin);

            $userPass = $_REQUEST['password'];
            $userPass = trim($userPass);
            if ($userLogin == $login && $userPass == $pass) {
                echo "<br>Доступ разрешен!";
            } else {
                echo "<br>Доступ запрещен";
            }
        }
        ?>
        <Br>
        <form action="" method="GET">  
            Логин <input type="text" name="login">
            Пароль <input type="password" name="password" >
            <input type="submit"> 
        </form>

        <?php 
            /* Атрибуты value и placeholder */
            echo "<b><br>Атрибуты value и placeholder</b><br><br>"        
        ?>
    </div>
</div>
</body>
</html>
