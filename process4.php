<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);

    $errors = [];

    if (empty($email)) {
        $errors[] = 'Электронная почта обязательна для заполнения';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Укажите корректный адрес электронной почты';
    }

    if (empty($errors)) {

        $email = htmlspecialchars($email);

        echo '<h1>Спасибо за подписку!</h1>';
        echo '<p>Вы подписаны на рассылку с адресом: ' . $email . '</p>';
 
    } else {
        echo '<h1>Ошибка:</h1>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li style="color:red">' . $error . '</li>';
        }
        echo '</ul>';
    }
}
