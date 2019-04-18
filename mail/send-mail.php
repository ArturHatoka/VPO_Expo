<?php
$name = $_POST['name'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];
$comment = $_POST['comment'];

$name = htmlspecialchars($name);
$telephone = htmlspecialchars($telephone);
$mail = htmlspecialchars($mail);
$comment = htmlspecialchars($comment);

$name = urldecode($name);
$telephone = urldecode($telephone);
$mail = urldecode($mail);
$comment = urldecode($comment);

$name = trim($name);
$telephone = trim($telephone);
$mail = trim($mail);
$comment = trim($comment);

if (mail("INFO@VPOEXPRO.RU",
    "Заявка с сайта",
    "Имя: ".$name. "\nТелефон: ".$telephone. "\nEmail:\n".$mail. "\nКометарий:".comment))
{
    header("Location: /#endthx");
} else {
    echo "при отправке сообщения возникли ошибки";
}