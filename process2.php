<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $errors = [];

    if (empty($name)) {
        $errors[] = 'Имя обязательно для заполнения';
    }

    if (empty($email)) {
        $errors[] = 'Электронная почта обязательна для заполнения';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Укажите корректный адрес электронной почты';
    }

    if (empty($message)) {
        $errors[] = 'Сообщение обязательно для заполнения';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Сообщение должно содержать не менее 10 символов';
    }

    if (empty($errors)) {
        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        echo '<h1>Спасибо за сообщение!</h1>';
        echo '<p>Имя: ' . $name . '</p>';
        echo '<p>Email: ' . $email . '</p>';
        echo '<p>Сообщение: ' . $message . '</p>';
    } else {
        echo '<h1>Ошибка!</h1>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li style="color:red">' . $error . '</li>';
        }
        echo '</ul>';
    }
}
