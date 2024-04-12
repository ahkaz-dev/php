<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2>Пароль оказался верным!</h2>
    <h3>Ну или "письмо" отправлено</h3>
    <?php
        $to = "";
        $subject = "";
        $message = "";
        if (isset($_POST['to']) & isset($_POST['subject']) & isset($_POST['message']) ) {
            $to = $_POST['to'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
        }
        echo "Кому: " .  $to . "<br>";
        echo "От кого: " .  $subject . "<br>";
        echo "Сообщение: " .  $message ."</b>";
    ?>    
    <br><br>
    <b><a href="index.php">Вернуться обратно</a></b>
</body>
</html>