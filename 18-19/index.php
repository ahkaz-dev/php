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
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        /* Задание № 2 */
        echo "<b>Задание № 2</b><br>";

            $name;
            $surname;
            $lastname;
            $allFIO = "";
            $address = "";
            $email = "";
            if (isset($_GET['name'])) {
                $name = $_GET['name'];
                $allFIO .= $name;
            }
            if (isset($_GET['surname'])) {
                $surname = $_GET['surname'];
                $allFIO .= " " . $surname;
            }
            if (isset($_GET['lastname'])) {
                $lastname = $_GET['lastname'];
                $allFIO .= " " . $lastname;
            }
            if (isset($_GET['address'])) {
                $address = $_GET['address'];
            }
            if (isset($_GET['email'])) {
                $email = $_GET['email'];
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
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 3 */
        echo "<b>Задание № 3</b><br>";

        $final_password = "qwerty";
        $enter_password = "";
        if (isset($_GET['enter_password'])) {
            $enter_password = $_GET['enter_password'];
            if ($enter_password == $final_password ) {
                header("Location: congratulations.php");
            } else {
                echo "Пароль оказался не верным!";
            }
        }
    ?>
    <form action="" method="get">
        Пароль <input type="password" name="enter_password" placeholder="Введите пароль">
        <br>
        <input type="submit">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
    
        /* Задание № 4 */
        echo "<b>Задание № 4</b><br>";
        $to = "";
        $subject = "";
        $message = "";
        if (isset($_POST['to']) & isset($_POST['subject']) & isset($_POST['message']) ) {
            $to = $_POST['to'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            header("Location: congratulations.php");
        }
    ?>
    <form method="post" name="send_Email" action="congratulations.php">

    Enter Name:	<input type="text" name="to" placeholder="Ваша почта">

    Enter Email Address:	<input type="text" name="subject" placeholder="На какую почту отправить">

    Enter Message:	<textarea name="message" placeholder="Ваше сообщение"></textarea>

    <input type="submit" value="Отправить">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
    
        /* Задание № 5 */
        echo "<b>Задание № 5</b><br>";

        $a=0;
        $b=0;
        if (isset($_GET['first_a']) & isset($_GET['first_b'])) {
            $a = $_GET['first_a'];
            $b = $_GET['first_b'];
        }
            if (isset($_GET['submit_plus'])){
                echo $a + $b;
            }
            if (isset($_GET['submit_minus'])){
                echo $a - $b;
            }
            if (isset($_GET['submit_div'])){
                echo $a / $b;
            }
            if (isset($_GET['submit_multip'])){
                echo $a * $b;
            }
    ?>
    <form method="get">
        Первое число <input type="text" name="first_a" id="" placeholder="Ввод только чисел">
        <Br>
        Второе число <input type="text" name="first_b" id="" placeholder="Ввод только чисел">
        <br><br>
        <input type="submit" value="+" name="submit_plus" style="width: 50px; height: 50px; padding: 16px 16px;">
        <input type="submit" value="-" name="submit_minus" style="width: 50px; height: 50px; padding: 16px 16px;">
        <input type="submit" value="*" name="submit_multip" style="width: 50px; height: 50px; padding: 16px 16px;">
        <input type="submit" value="/" name="submit_div" style="width: 50px; height: 50px; padding: 16px 16px;">
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
            /* Задание № 6 */
            echo "<b>Задание № 6</b><br>";
            $user_name = "";
            $user_knowledge = "";
            $user_dateOfBirth = "";
            if (isset($_POST['user_name']) & isset($_POST['user_knowledge']) & isset($_POST['user_dateOfBirth']) ) {
                $user_name = $_POST['user_name'];
                $user_knowledge = $_POST['user_knowledge'];
                $user_dateOfBirth = $_POST['user_dateOfBirth'];
                header("Location: form.php");
            }
    ?>
    <form action="form.php" method="post">
        Имя <input type="text" name="user_name" placeholder="Ваше имя">
        <Br>
        Количество языков программирования, которые вы знаете <input type="text" name="user_knowledge" placeholder="ЯП через запятую"> 
        <br>
        Дата рождения <input type="text" name="user_dateOfBirth" placeholder="Пример: 20.12.2013">
        <br>
        <br>
        <input type="submit">    
    </form>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        /* Задание № 7 */
        echo "<b>Задание № 7</b>";
        $final_answer1 = "Ответ";
        $final_answer2 = "Ответ";
        $final_answer3 = "Ответ";
        $final_answer4 = "Ответ";

        $enter_answer1 = "";
        $enter_answer2 = "";
        $enter_answer3 = "";
        $enter_answer4 = "";

        $questArr = array();

        $result = 0;
        if (isset($_GET['enter_answer'])) {
            $enter_answer1 = $_GET['enter_answer'];
            if ($enter_answer1 == $final_answer1 ) {
                $result += 10;
            } else {
                $questArr[] = 1;
            }
        }
        if (isset($_GET['enter_answer2'])) {
            $enter_answer2 = $_GET['enter_answer2'];
            if ($enter_answer2 == $final_answer2 ) {
                $result += 10;
            } else {
                $questArr[] = 2;
            }
        }
        if (isset($_GET['enter_answer3'])) {
            $enter_answer3 = $_GET['enter_answer3'];
            if ($enter_answer3 == $final_answer3 ) {
                $result += 10;
            } else {
                $questArr[] = 3;
            }
        }
        if (isset($_GET['enter_answer4'])) {
            $enter_answer4 = $_GET['enter_answer4'];
            if ($enter_answer4 == $final_answer4 ) {
                $result += 10;
            } else {
                $questArr[] = 4;
            }
        }
    ?>
    <form action="" method="get">
        Вопрос 1 <input type="text" name="enter_answer" placeholder="Введите ответ"><br>
        Вопрос 2 <input type="text" name="enter_answer2" placeholder="Введите ответ"><br>
        Вопрос 3 <input type="text" name="enter_answer3" placeholder="Введите ответ"><br>
        Вопрос 4 <input type="text" name="enter_answer4" placeholder="Введите ответ">
        <br>
        <input type="submit">
    </form>
    <?php
        echo "Результат теста: " . $result;
        echo "<br>Вы ошиблись в ";
        foreach($questArr as $i) {
            echo $i . " ";
        }
        echo "вопросе!";
    ?>
</div>
</body>
</html>
