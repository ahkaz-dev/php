<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
        $user_name = "";
        $user_knowledge = "";
        $user_dateOfBirth = "";
        $now = "";
        if (isset($_POST['user_name']) || isset($_POST['user_knowledge']) || isset($_POST['user_dateOfBirth']) ) {
            if (!empty($_POST['user_name']) || !empty($_POST['user_knowledge']) || !empty($_POST['user_dateOfBirth'])) {
                $user_name = $_POST['user_name'];
                $user_knowledge = $_POST['user_knowledge'];
                $user_dateOfBirth = $_POST['user_dateOfBirth'];
            }
        } else {
            $user_name = "";
            $user_knowledge = "";
            $user_dateOfBirth = "";
        }
        $user_knowledgeArr = explode(",", $user_knowledge);
        $user_dateOfBirthArr = explode(".", $user_dateOfBirth);
        if (!empty($user_name)) {
            echo "Имя: " .  $user_name . "<br>";
        } else {
            echo "Кажется вы не указали имя!<br>";
        }
        if (!empty($user_knowledge)) {
            echo "Сколько языков прграммирования вы знаете: " . count($user_knowledgeArr) . "<br>";
        } else {
            echo "Ой, вы забыли указать свои знания<br>";
        }
        if (!empty($user_dateOfBirth)) {
            echo "Ваш возраст: " .  $user_dateOfBirthArr[2] - date("Y") ."</b>";
        } else {
            echo "У нас нет вашего возраста!<br>";
        }
    ?>    
    <b><a href="index.php">Вернуться обратно</a></b>
</body>
</html>