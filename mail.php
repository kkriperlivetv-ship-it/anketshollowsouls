<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $age = htmlspecialchars($_POST['age']);
    $freeTime = htmlspecialchars($_POST['freeTime']);
    $purpose = htmlspecialchars($_POST['purpose']);
    
    // Ваш email - ЗАМЕНИТЕ этот адрес на свой реальный
    $to = "marathon868@gmail.com";
    
    // Тема письма
    $subject = "Новая анкета для Отдела по сообществу";
    
    // Содержание письма
    $message = "
    <html>
    <head>
        <title>Новая анкета для Отдела по сообществу</title>
    </head>
    <body>
        <h2>Новая анкета от потенциального участника</h2>
        <p><strong>Имя:</strong> $name</p>
        <p><strong>Возраст:</strong> $age</p>
        <p><strong>Свободное время:</strong> $freeTime часов в неделю</p>
        <p><strong>Цель участия:</strong> $purpose</p>
        <hr>
        <p><small>Это письмо отправлено автоматически с формы на вашем сайте.</small></p>
    </body>
    </html>
    ";
    
    // Заголовки письма
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: no-reply@yoursite.com" . "\r\n";
    
    // Отправляем письмо
    if(mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>