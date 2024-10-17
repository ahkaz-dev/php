<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="alerts.css">
</head>
<body>
    <form action="" method="post" class="login-form">
    <label for="usLogin">Введите логин</label>
    <input type="text" name="usLogin" id="usLogin" required placeholder="Логин">

    <label for="usPass">Введите пароль</label>
    <input type="password" name="usPass" id="usPass" required placeholder="Пароль">

    <label for="usCapcha">Пройдите проверку</label>
    <input type="text" name="usCapcha" id="usCapcha" required placeholder="Капча">
    <?php
        session_start();
        $_SESSION['flash_message'] = "Вы вошли в аккаунт";
        
        $dbUser = "is4Zakhar";
        $dbPass = "xg4PAEO)nk3IZ6qy";
        $dbname = "isfourtestbd";
        $conn = mysqli_connect("localhost", $dbUser, $dbPass, $dbname);

        $capchaGen = substr(bin2hex(random_bytes(16)), 0, 5);
        echo "<u class='ucapcha'>$capchaGen</u>";
        $sql = "INSERT INTO capcha (capchaText) VALUES ('$capchaGen')";
        $conn -> query($sql);
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["usLogin"]) and empty($_POST["usPass"])) {
                echo "<span class='flash'>Ошибка: Введите пароль И логин</span>";     
            } else {
                $userLogin = $_POST["usLogin"];
                $userPass = $_POST["usPass"];
                
                $qlog = $conn -> query("SELECT * FROM userdata WHERE userLogin = '$userLogin'");
                $qpass = $conn -> query("SELECT * FROM userdata WHERE userPassword = '$userPass'");
            }
        
            if (empty($_POST["usCapcha"])) {
                echo "<span class='flash'>Ошибка: Введите капчу!</span>";     
            } else {
                $usCapcha = $_POST["usCapcha"];
                $result = $conn -> query("SELECT * FROM capcha WHERE capchaText = '$usCapcha'");
        
                if ($result->num_rows > 0 AND ($qlog->num_rows > 0) AND ($qpass->num_rows > 0)) {
                    try {
                        $conn -> query("DELETE FROM capcha WHERE capchaText = '$usCapcha'");
                        $conn -> query("DELETE FROM capcha WHERE id >= 1");
                        $conn -> query("ALTER TABLE capcha AUTO_INCREMENT = 1");
        
                        header('Location: http://localhost/php/capthatest/access.php');
                    } catch (Exception){
                        echo "";
                    }
                } elseif (!($qlog->num_rows > 0) AND !($qpass->num_rows > 0)) {
                    echo "<span class='flash'>Ошибка: Данного пользователя не существует</span>";
                } 
                else {          
                    $conn -> query("DELETE FROM capcha WHERE capchaText = '$usCapcha'");
                    $conn -> query("DELETE FROM capcha WHERE id >= 1");
                    $conn -> query("ALTER TABLE capcha AUTO_INCREMENT = 1");
                        
                    echo "<span class='flash'>Ошибка: Неправильная капча!!</span>";
                }
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
