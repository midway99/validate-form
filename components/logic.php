<?php
if (isset($_POST['send'])) {
    $success = true;

    $sth = $dbConnection->prepare('INSERT INTO student
    (name, age, university_id)
     VALUES (:name, :age, :university_id)');

    $result = $sth->execute([
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'university_id' => $_POST['universityId'],
        ]
    );

    if ($result) {
        $message = 'Пользователь добавлен';
    } else {
        $message = 'Ошибка добавление пользователя';
        $success = false;
    }

    header("Location: /?success=$success&message=$message");
}

$name = $_POST['name'];
$age = $_POST['age'];
$universityId = $_POST['universityId'];

if (mb_strlen($name, 'UTF-8') >= 15) {
    $response['result'] = false;
    $response['message'] = 'Имя слишком длинное';
} else if ($age < '18' || $age > '100') {
    $response['result'] = false;
    $response['message'] = 'Возраст введен неправильно';
}

if (isset($_GET['success'])) {
    if ($_GET['success']) {
        echo "<p style='color:green'>{$_GET['message']}</p>";
    } else {
        echo "<p style='color:red'>{$_GET['message']}</p>";
    }
}

if($_POST['view_list']=='true'){
    $stmt = $dbConnection->query('SELECT * FROM student');
    $response  = $stmt -> fetchAll(PDO::FETCH_ASSOCC);
}
json_encode($response);
?>