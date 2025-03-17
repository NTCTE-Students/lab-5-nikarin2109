<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    if (empty($username)) {
        $errors[] = 'Имя пользователя обязательно для заполнения';
    }

    if (empty($password)) {
        $errors[] = 'Пароль обязателен для заполнения';
    }

    if (empty($confirm_password)) {
        $errors[] = 'Подтвердите пароль';
    }

    if ($password !== $confirm_password) {
        $errors[] = 'Пароли не совпадают';
    }

    if (empty($errors)) {
      
        $username = htmlspecialchars($username);

        echo '<h1>Регистрация успешна!</h1>';
        echo 'Имя пользователя: ' . $username . '<br>';
        echo 'Пароль: СКРЫТО <br>';
    } else {
        echo '<h1>Ошибка регистрации:</h1>';
        foreach ($errors as $error) {
            echo '<p style="color:red">' . $error . '</p>';
        }
    }
}
