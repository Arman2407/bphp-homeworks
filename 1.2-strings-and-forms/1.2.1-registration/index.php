<?php
$name = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$middleName = $_POST['middleName'];
$code = $_POST['code'];
$codeWord = 'nd82jaake';

if (preg_match(/\W/, $name)) {
	echo "Поле логин не должно содержать символы @/*?,;:.";
}elseif (strlen($password) < 8) {
	echo "Длина пароля должна быть минимум 8 символов ";
}elseif (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email)) {
	echo "Почта должна быть формата почта@домен.доменнаязона";
}elseif (strlen($firstName) === 0) {
	echo "Поле Имя не может быть пустым";
}elseif (strlen($lastName) === 0) {
	echo "Поле Фамилия не может быть пустым";
}elseif (strlen($middleName) === 0) {
	echo "Поле Отчество не может быть пустым";
}elseif ($codeWord !== $code) {
	echo "Вы неверно указали Кодовое слово";
}else {
	echo "Вы успешно зарегистрировались!";
}
?>