<?php
session_start();

// Подключаем HTML-код
include 'html_code.php';

// Проверяем наличие имени пользователя в сессии
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    // Если имя пользователя существует, приветствуем пользователя
    echo "<p>Привет, {$_SESSION['username']}!</p>";
    echo "<p><a href='exit.php'>Выйти</a></p>";
} else {
    // Иначе отображаем форму
    include 'form.php';
}
?>