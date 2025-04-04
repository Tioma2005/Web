<?php
session_start();

$login = $_SESSION['login'] ?? 'Не задано';
$password = $_SESSION['password'] ?? 'Не задано';
$birthdate = $_SESSION['birthdate'] ?? 'Не задано';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ваши данные</title>
</head>
<body>

<h2>Ваши данные</h2>
<p><strong>Логин:</strong> <?php echo htmlspecialchars($login); ?></p>
<p><strong>Пароль:</strong> <?php echo htmlspecialchars($password); ?></p>
<p><strong>Дата рождения:</strong> <?php echo htmlspecialchars($birthdate); ?></p>

<a href="form.php">Назад к форме</a>

</body>
</html>
