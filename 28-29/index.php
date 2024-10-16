<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пр 28-29</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
 
    <p class="LtoSecondPart">
            <a href="./index.php">Обновить страницу</a>
    </p>
    <?php
        $user = "is4Zakhar";
        $password = "xg4PAEO)nk3IZ6qy";
        $dbname = "isfourtestbd";
        $conn = mysqli_connect("localhost", $user, $password, $dbname);

        if ($conn == false) {
            echo "статус: <span style='color: red;'>0</span>: " . mysqli_connect_error() . "<br>";
          }
        echo "<span style='font-size: 15px;'>статус: <span style='color: #4de927;'>1</span> </span><br>";

        // query start
        echo "<b>Задание на LIMIT</b><br>";

        $query_component = "SELECT * FROM Workers LIMIT 6"; 
        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Name</b></td>
            <td><b class="other">Age</b></td>
            <td><b class="other"><b class="other">Salary</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%d</tr></td>", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
    ?>
    </table>

    <br>
    <?php
        $query_component = "SELECT * FROM Workers LIMIT 3 OFFSET 1"; 
        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Name</b></td>
            <td><b class="other">Age</b></td>
            <td><b class="other"><b class="other">Salary</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%d</tr></td>", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
    ?>
    </table>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание на ORDER BY</b><br>";    

        $query_component = "SELECT * FROM Workers ORDER BY salary"; 
        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Name</b></td>
            <td><b class="other">Age</b></td>
            <td><b class="other"><b class="other">Salary</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%d</tr></td>", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
    ?>
    </table>

    <br>
    <?php

        $query_component = "SELECT * FROM Workers ORDER BY salary DESC"; 
        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Name</b></td>
            <td><b class="other">Age</b></td>
            <td><b class="other"><b class="other">Salary</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%d</tr></td>", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
    ?>
    </table>

    <br>
    <?php

        $query_component = "SELECT * FROM Workers ORDER BY salary LIMIT 6 OFFSET 1"; 
        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Name</b></td>
            <td><b class="other">Age</b></td>
            <td><b class="other"><b class="other">Salary</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%d</tr></td>", $row["Id"], $row["Name"], $row["Age"], $row["Salary"]);
        }
    ?>
    </table>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание на COUNT</b><br>";  

        $query_component = "SELECT COUNT(*) AS count FROM Workers"; 
        $query = mysqli_query( $conn, $query_component);
        
        $row = $query->fetch_assoc();
        echo $row['count'];

        echo "<br>";

        $query_component = "SELECT COUNT(*) AS count FROM Workers WHERE salary = 300"; 
        $query = mysqli_query( $conn, $query_component);
        
        $row = $query->fetch_assoc();
        echo $row['count'];
    ?>
    </div>
</div>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <?php
        echo "<b>Задание на LIKE</b><br>";       
        
        $query_component = "SELECT * FROM Pages WHERE Author LIKE '%ов'"; 

        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Author</b></td>
            <td><b class="other">Article</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%s</td>", 
                $row["id"], $row["Author"], $row["Article"]);
        }
    ?>
    </table> 

    <br>

    <?php
        $query_component = "SELECT * FROM Pages WHERE Article LIKE '%элемент%'"; 

        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Author</b></td>
            <td><b class="other">Article</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%s</td>", 
                $row["id"], $row["Author"], $row["Article"]);
        }
    ?>
    </table> 
    
    <br>

    <?php
        $query_component = "SELECT * FROM Workers WHERE Article LIKE '%элемент%'"; 

        $query = mysqli_query( $conn, $query_component);
    ?>
    <table>
        <tr>
            <td><b class="other">Id</b></td>
            <td><b class="other">Author</b></td>
            <td><b class="other">Article</b></td>
        </tr>
    <?php
        while ($row = mysqli_fetch_array($query)) {
            printf("<tr><td>%d</td><td>%s</td><td>%s</td>", 
                $row["id"], $row["Author"], $row["Article"]);
        }
    ?>
    </table> 
    </div>
</div>           
</body>
</html>