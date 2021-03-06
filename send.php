<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$email = $_POST['email'];

// Формирование письма с сообщением
$title = "Новое обращение Best Tour PLan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";
// Формирование письма подписки 
$title_ltr = "Новая подписка на рассылку";
$body_ltr = "
<h2>Новая подписка</h2>
<b>Почта:</b> $email
";
// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'ssl://smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'sskoshelevich@mail.ru'; // Логин на почте
    $mail->Password   = 'XjWPdGKlR8VaIF8L6Zrt'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('sskoshelevich@mail.ru', 'Сергей Кошелевич'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('sergUseer@yandex.ru');  

// Отправка сообщения
$mail->isHTML(true);

if ($email) {
    $mail->Subject = $title_ltr;
    $mail->Body = $body_ltr;
}
if ($name && $phone && $message) {
    $mail->Subject = $title;
    $mail->Body = $body;    
}

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
if ($email) {
    header('Location: thankyou-subscribe.html');
}
if ($name && $phone && $message) {
    header('Location: thankyou.html');
}
