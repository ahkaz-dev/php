<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
</head>
<body>
<div id="phpDiv" style="margin-top: 20px;">
    <div class="center">
    <p class="LtoSecondPart">
            <a href="index.php">Вернуться обратно</a>
    </p>
    <?php
        $userName = "";
        $userTel = "";
        $userTelhome = "";
        
        // рассмотрим файл как массив
        $users = file("newfile.txt", FILE_SKIP_EMPTY_LINES);
        //print_r($users);

        $userList = [];
        foreach ($users as $user) {
            list($userName, $userTel, $userTelhome) = explode(", ", $user);
            $userList[] = [
                "name" => $userName,
                "work_phone" => $userTel,
                "home_phone" => $userTelhome
            ];
        }
    ?>
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-60hs{font-size:20px;text-align:left;vertical-align:top}
.tg .tg-0lax{text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-60hs">№</th>
    <th class="tg-60hs">Имя</th>
    <th class="tg-60hs">Рабочий номер телефона</th>
    <th class="tg-60hs">Домашний номер телефона</th>
  </tr>
</thead>
<tbody>
<?php $i = 1; foreach ($userList as $user): ?>

  <tr>
    <td class="tg-0lax"><?= $i ?></td>
    <td class="tg-0lax"><?= $user["name"] ?></td>
    <td class="tg-0lax"><?= $user["work_phone"] ?></td>
    <td class="tg-0lax"><?= $user["home_phone"] ?></td>
</tr>
  <?php $i++; endforeach;
 ?>
</tbody>
</table>
</body>
</html>