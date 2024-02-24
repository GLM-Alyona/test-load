<?php
session_start();

// Очищаем переменную сессии, содержащую имя пользователя
unset($_SESSION['username']);

header('Location: index.php');
?>