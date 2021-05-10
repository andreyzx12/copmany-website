<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
    if (isset($_POST['body'])) {$messbody = $_POST['body'];}
    if (isset($_POST['mail'])) {$messmail = $_POST['mail'];}
    if (isset($_POST['formData'])) {$formData = $_POST['formData'];}

    $to = "gog13gogv@gmail.com"; /*адрес получателя*/
    $sendfrom   = "uk-spektr-nn@yandex.ru"; /*адрес отправителя*/
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $subject = "Форма обратной связи";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
    echo '<center><p class="success">Спасибо за отправку вашего сообщения!</p></center>';
    }
    else 
    {
    echo '<center><p class="fail"><b>Спасибо за отправку вашего сообщения!</b></p></center>';
    }
} else {
    https_response_code(403);
    echo "Попробуйте еще раз";
}
?>