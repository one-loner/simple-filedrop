<?php
// login.php

// Проверяем, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Здесь можно добавить логику для проверки логина и пароля
    // В данном случае мы просто выводим сообщение о неверных данных
    echo "<div style='color: red; text-align: center;'>";
    echo "Неверный логин/пароль";
    echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Залогиньтесь, уважаемый</title>
    <link rel="stylesheet" href="styles.css"> <!-- Ссылка на внешний CSS-файл -->
</head>
<body>
    <div class="container">
        <h1>Залогиньтесь, уважаемый</h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Имя пользователя" required>
            <input type="password" name="password" placeholder="Пароль" required><br><br></form><form>
            <button type="submit">Войти</button>
        </form>
    </div>
</body>
</html>
