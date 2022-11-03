<?php
$text = $_POST['text'];
$email = $_POST['email'];
$text = htmlspecialchars($text);
$email = htmlspecialchars($email);
$text = urldecode($text);
$email = urldecode($email);
$text = trim($text);
$email = trim($email);
if (mail("gvl224@ukr.net", "письмо с сайта шифратор дешифратор", 
"Текст письма: " .$text. ". E-mail отправителя: ".$email ,"From: 1234 \r\n" ))
{echo "успешно";
}else{
    echo "ошибка";
}
?>