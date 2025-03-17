<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
</head>
<body>
    <h1>Форма обратной связи</h1>
    <form action="process2.php" method="post">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Электронная почта:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Сообщение:</label>
        <textarea id="message" name="message" rows="4" required></textarea><br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>