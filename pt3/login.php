<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="/php/capthatest/style.css">
    <link rel="stylesheet" href="/php/capthatest/alerts.css">
</head>
<body>
    <form action="" method="post" class="login-form">
    <label for="usLogin">Введите логин</label>
    <input type="text" name="usLogin" id="usLogin" required placeholder="Логин">

    <label for="usPass">Введите пароль</label>
    <input type="password" name="usPass" id="usPass" required placeholder="Пароль">

    <?php
        session_start();
        $_SESSION['flash_message'] = "Доступ активирован";
        $_SESSION['usLogin'] = "";
        $_SESSION['usPass'] = "";

        
        $dbUser = "is4Zakhar";
        $dbPass = "xg4PAEO)nk3IZ6qy";
        $dbname = "isfourtestbd";
        $conn = mysqli_connect("localhost", $dbUser, $dbPass, $dbname);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["usLogin"]) and empty($_POST["usPass"])) {
                echo "<span class='flash'>Ошибка: Введите пароль И логин</span>";     
            } else {
                $userLogin = $_POST["usLogin"];
                $userPass = $_POST["usPass"];
                
                $qlog = $conn -> query("SELECT * FROM userdata WHERE userLogin = '$userLogin'");
                $qpass = $conn -> query("SELECT * FROM userdata WHERE userPassword = '$userPass'");
            }
        
            if (($qlog->num_rows > 0) AND ($qpass->num_rows > 0)) {
                try {
                    $_SESSION['usLogin'] = $userLogin;
                    $_SESSION['usPass'] = $userPass;
                    $_SESSION['auth'] = true;

                    header('Location: http://localhost/php/pt3/login-auth.php');

                } catch (Exception){
                    echo "";
                }
            } elseif (!($qlog->num_rows > 0) AND !($qpass->num_rows > 0)) {
                echo "<span class='flash'>Ошибка: Данного пользователя не существует</span>";
            } 
    }
        
        mysqli_close($conn);
    ?>
        <button type="submit">Войти</button>
        </form>
</body>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const flashElement = document.querySelector('.flash');
        flashElement.classList.add('show');

        setTimeout(() => {
            flashElement.classList.add('hide');
        }, 4000); 
    });
</script>
</html>
