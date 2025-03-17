<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    $errors = [];

    if (empty($username)) {
        $errors[] = 'Имя пользователя обязательно для заполнения';
    } elseif (strlen($username) < 4) {
        $errors[] = 'Имя пользователя должно содержать не менее 4 символов';
    }

    if (empty($password)) {
        $errors[] = 'Пароль обязателен для заполнения';
    }


    if (empty($errors)) {
        $username = htmlspecialchars($username);
        echo '<h1>Вход выполнен успешно!</h1>';
        echo '<p>Добро пожаловать, ' . $username . '!</p>';

    } else {
        echo '<h1>Ошибка входа:</h1>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li style="color:red">' . $error . '</li>';
        }
        echo '</ul>';
    }
}

