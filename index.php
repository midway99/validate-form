<?php
include 'components/db.php';
$dbConnection = getConnection();
include 'components/logic.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>
<h1>Вы можете посмотреть список студентов и добаить студента</h1>
<h2>В этом месте вы можете получить спиоск студентов</h2>
<form amethod="post">
    <input type="submit" name="view_list" value="Получить данные студентов">
</form>
<h3>Добавьте студента в базу: </h3>
<form method="post" onsubmit="return Validate()">
    <p>Имя студента: <input type="text" name="name" id="name" maxlength="18" placeholder="Имя студента"></p>
    <p>Возраст: <input type="text" name="age" id = "userAge" required min="18" max="100" placeholder="Возраст студента"></p>
    <p>Университет:
        <select name="universityId" id="universityId" required>
            <option value="1">ДГМА</option>
            <option value="2">КЕГИ</option>
            <option value="3">ДЖКХ</option>
        </select>
    </p>
    <input type="submit" name="send_data" value="send_data">
</form>
<script src="js/main.js">
</script>
</body>
</html>

