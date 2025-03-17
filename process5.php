<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $date = $_POST['date'];
    $time = $_POST['time'];

    $errors = [];

    if (empty($name)) {
        $errors[] = 'Имя обязательно для заполнения';
    }

    if (empty($date)) {
        $errors[] = 'Дата бронирования обязательна';
    } else {
        $dateParts = explode('-', $date);
        if (count($dateParts) != 3 || !checkdate($dateParts[1], $dateParts[2], $dateParts[0])) {
            $errors[] = 'Укажите корректную дату (ГГГГ-ММ-ДД)';
        }
    }

    if (empty($time)) {
        $errors[] = 'Время бронирования обязательно';
    } else {

    }

    if (empty($errors)) {

        $name = htmlspecialchars($name);

        echo '<h1>Бронирование успешно!</h1>';
        echo '<p>Имя: ' . $name . '</p>';
        echo '<p>Дата: ' . $date . '</p>';
        echo '<p>Время: ' . $time . '</p>';

    } else {
        echo '<h1>Ошибка бронирования:</h1>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li style="color:red">' . $error . '</li>';
        }
        echo '</ul>';
    }
}
