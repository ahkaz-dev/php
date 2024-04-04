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
            $address;
            $email;
            if (!empty($_REQUEST['name'])) {
                $name = $_REQUEST['name'];
                $allFIO .= $name;
            }
            if (!empty($_REQUEST['surname'])) {
                $surname = $_REQUEST['surname'];
                $allFIO .= " " . $surname;
            }
            if (!empty($_REQUEST['lastname'])) {
                $lastname = $_REQUEST['lastname'];
                $allFIO .= " " . $lastname;
            }
            if (!empty($_REQUEST['address'])) {
                $address = $_REQUEST['address'];
            }
            if (!empty($_REQUEST['email'])) {
                $email = $_REQUEST['email'];
            }
        ?>
        <table style="display: flex;
    flex-direction: column;
    align-items: center;">
            <thead>
            <tr>
                <th>ФИО</th>
                <th>Адрес</th>
                <th>Почта</th>
            </tr>
            </thead>
            <tbody>
                <?php
            echo '<tr>';
            echo '<td>' . $allFIO . '</td>';
            echo '<td>' . $address . '</td>';
            echo '<td>' . $email . '</td>';
            echo '</tr>';                
                ?>
            </tbody>
        </table>
        <br>

        <form action="" method="GET">  
            Имя <input type="text" name="name" placeholder="Введите имя">
            Фамилия <input type="text" name="surname" placeholder="Введите фамиию">
            Отчество <input type="text" name="lastname" placeholder="Введите отчество">
            <br>
            Адрес <input type="text" name="address" placeholder="Введите адрес">
            Почта <input type="email" name="email" placeholder="Введите емайл">
            <br>
            <input type="submit"> 
        </form>
    </div>
</div>
</body>
</html>