<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 27</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
 
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        // https://htmlacademy.ru/blog/php/mysql
        echo "<b>Задание SELECT</b><br>";
    
        $user = "is4Zakhar";
        $password = "xg4PAEO)nk3IZ6qy";
        $dbname = "isfourtestbd";
        $conn = mysqli_connect("localhost", $user, $password, $dbname);

        if ($conn == false) {
            echo "статус: <span style='color: red;'>0</span>: " . mysqli_connect_error() . "<br>";
          }
        echo "<span style='font-size: 15px;'>статус: <span style='color: #4de927;'>1</span> </span><br>";

        // query start

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE id = 3");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE salary = 1000");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE age = 23");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";
        
        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE salary > 400");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";
        
        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE salary >= 500");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";
        
        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE salary != 500");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";
                
        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE salary <= 900");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT Age, Salary FROM workers WHERE name = 'Вася'");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %d", $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";
        ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание OR|AND</b><br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE age > 25 AND age <= 28");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE name='Петя'");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE name='Петя' OR name='Вася'");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE name!='Петя'");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE age >= 27 OR salary = 1000");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE (age >= 23 AND age <= 27) OR (salary >= 400 AND salary <= 1000)");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";

        $query = mysqli_query( $conn,"SELECT * FROM workers WHERE (age >= 27) OR (salary != 400)");
        while ($row = mysqli_fetch_array($query)) {
            printf("%d %s %d %d", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
            echo "; ";
        }
        echo "<br>";
        
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание INSERT</b><br>";
    
        try {
            $query =  mysqli_query($conn, "INSERT INTO workers SET name='Никита', age=26, salary=300");

            echo "Новый сотрудник был добавлен<br>";
        } catch (Exception $e) {
            echo "Новый сотрудник не был добавлен<br>";
        }

        try {
            $query = mysqli_query($conn, "INSERT INTO workers (name, age, salary) VALUES ('Светлана', 20, 1200)");

            echo "Новый сотрудник был добавлен<br>";
        } catch (Exception $e) {
            echo "Новый сотрудник не был добавлен<br>";
        }

        try {
            $some_quary = "INSERT INTO workers (name, age, salary)
                            VALUES ('Ярослав', 30, 1200), ('Петр', 31, 1000)";
            $query = mysqli_query($conn, $some_quary);

            echo "Новые сотрудники был добавлены<br>";
        } catch (Exception $e) {
            echo "Новые сотрудники не были добавлены<br>";
        }
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание DELETE</b><br>";
        
        try {
            $query = mysqli_query($conn, "DELETE FROM workers WHERE id=7");
            echo "Сотрудник с id = 7 был удален<br>";
        } catch (Exception $e) {
            echo "Сотрудник с id = 7 не был удален<br>";
        }

        try {
            $query = mysqli_query($conn, "DELETE FROM workers WHERE name='Коля'");
            echo "Сотрудник с именем 'Коля' был удален<br>";
        } catch (Exception $e) {
            echo "Сотрудник с именем 'Коля' не был удален<br>";
        }

        try {
            $query = mysqli_query($conn, "DELETE FROM workers WHERE age=23");
            echo "Сотрудники с возрастом = 23 был удален<br>";
        } catch (Exception $e) {
            echo "Сотрудник с возрастом = 23 не был удален<br>";
        }

        if (isset($_POST['backTo'])) {
            $query = mysqli_query($conn, "DELETE FROM workers WHERE id > 6");
        }
    ?>
    <form action="" method="post">
        <button type="submit" name="backTo">Вернуться в исходное состояние</button>
    </form>
    </div>
</div>    
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание UPDATE</b><br>";


        try {
            $query = mysqli_query($conn, $query = "UPDATE workers SET salary=2000 WHERE name='Василий'");
        
            echo "Сотрудники с именем Василий получил новую salary = 2000<br>";
        } catch (Exception $e) {
            echo "Ошибка обновления данных";
        }
    ?>
    </div>
</div>    
    <?php
        mysqli_close($conn);
    ?>
</body>
</html>