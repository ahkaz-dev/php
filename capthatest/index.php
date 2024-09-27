<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Капча</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
        Введите логин <input type="text" name="usLogin" id=""><br><br>
        Введите пароль <input type="text" name="usPass" id="">
        <br><br><br>

        Пройдите проверку <input type="text" name="usCapcha" id="">        
        <br><br>
        <button type="submit">Войти</button>
    </form>
    <?php
        $dbUser = "is4Zakhar";
        $dbPass = "xg4PAEO)nk3IZ6qy";
        $dbname = "isfourtestbd";
        $conn = mysqli_connect("localhost", $dbUser, $dbPass, $dbname);

        $capchaGen = substr(bin2hex(random_bytes(16)), 0, 5);
        echo $capchaGen;
        $sql = "INSERT INTO capcha (capchaText) VALUES ('$capchaGen')";
        
        if (isset($_POST["usLogin"]) && isset($_POST["usPass"])) {
            $userLogin = $_POST["usLogin"];
            $userPass = $_POST["usPass"];

            if (isset($_POST["usCapcha"]) and !empty($_POST["usCapcha"]))
                if ($capchaGen == $_POST["usCapcha"]) {
                    echo "<br>111";
                }
        }        
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }

        mysqli_close($conn);
    ?>
</body>
</html>