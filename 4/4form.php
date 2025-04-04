<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $_SESSION['login'] = $_POST['login'] ?? '';
    $_SESSION['password'] = $_POST['password'] ?? '';
    $_SESSION['birthdate'] = $_POST['birthdate'] ?? '';

    header("Location: display.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма ввода</title>
</head>
<body>

<h2>Введите ваши данные</h2>
<form method="post">
    <label>Логин: <input type="text" name="login" required></label><br><br>
    <label>Пароль: <input type="password" name="password" required></label><br><br>
    <label>Дата рождения: <input type="date" name="birthdate" required></label><br><br>
    <button type="submit">Сохранить</button>
</form>

</body>
</html>
