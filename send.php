<?php
// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$name = $_POST['name'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Формирование самого письма
$title = "Новое обращение Best Tour PLan";
$body = "
<h2>Новое обращение</h2>
<b>Имя:</b> $name<br>
<b>Телефон:</b> $phone<br><br>
<b>Сообщение:</b><br>$message
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
try {
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
<<<<<<< HEAD
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'skoshelevich@gmail.com'; // Логин на почте
    $mail->Password   = 'zoA:4BKw'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('skoshelevich@gmail.com', 'Сергей Кошелевич'); // Адрес самой почты и имя отправителя
=======
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'ssl://smtp.mail.ru'; // SMTP сервера вашей почты
    $mail->Username   = 'sskoshelevich@mail.ru'; // Логин на почте
    $mail->Password   = 'XjWPdGKlR8VaIF8L6Zrt'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('sskoshelevich@mail.ru', 'Сергей Кошелевич'); // Адрес самой почты и имя отправителя
>>>>>>> 08b6f974544ad9013174ec2d14e851dce9dd442b

    // Получатель письма
    $mail->addAddress('sergUseer@yandex.ru');  

    // Отправка сообщения
    $mail->isHTML(true);
    $mail->Subject = $title;
    $mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {$result = "success";} 
else {$result = "error";}

} catch (Exception $e) {
    $result = "error";
    $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}

// Отображение результата
<<<<<<< HEAD
echo json_encode(["result" => $result, "resultfile" => $rfile, "status" => $status]);
=======
header('Location: thankyou.html');
>>>>>>> 08b6f974544ad9013174ec2d14e851dce9dd442b