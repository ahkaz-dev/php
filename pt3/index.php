<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <style>
        body {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    p {
        margin-top: 20px;
    }
    .spanner {
        color: blue;
    }
    .authspann {
        color: green;
    }
    </style>
</head>
<body>
    <?php
        session_start();
        if (!empty($_SESSION['auth'])) {
            echo "<br>Ваш логин: " . $_SESSION['usLogin'] . "<br>";

            echo "<br><p>Этот текст виден ТОЛЬКО  <span class=authspann>авторизованным пользователям</span></p>";
        } 

        echo "<br><br><p>Обычный текст для <span class=spanner>всех пользователей</span></p>";
        echo "<br><a href='login.php' class=acces-link>Вернуться</a>";
    ?>
</body>
</html>