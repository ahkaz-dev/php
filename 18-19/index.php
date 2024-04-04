<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 18-19</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 2 */
        echo "<b>Задание № 2</b><br>";

            $name;
            $surname;
            $lastname;
            $allFIO = "";
            if (!empty($_REQUEST['name'])) {
                $name = $_REQUEST['name'];
                #echo "Ваше" . $name . "!";
                $allFIO .= $name;
            }
            if (!empty($_REQUEST['surname'])) {
                $surname = $_REQUEST['surname'];
                #echo "Привет, " . $surname . "!";
                $allFIO .= " " . $surname;
            }
            if (!empty($_REQUEST['lastname'])) {
                $lastname = $_REQUEST['lastname'];
                #echo "Привет, " . $lastname . "!";
                $allFIO .= " " . $lastname;
            }
            echo "ФИО:  " . $allFIO;
        ?>

        <form action="" method="GET">  
            Имя <input type="text" name="name" placeholder="Введите имя">
            Фамилия <input type="text" name="surname" placeholder="Введите фамиию">
            Отчество <input type="text" name="lastname" placeholder="Введите отчество">
            <br>
            <input type="submit"> 
        </form>
    </div>
</div>
</body>
</html>