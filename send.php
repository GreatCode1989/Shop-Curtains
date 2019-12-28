<?php
    $fio = $_POST['design__form-name'];
    $email = $_POST['design__form-phone'];

    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);

    $fio = urldecode($fio);
    $email = urldecode($email);

    $fio = trim($fio);
    $email = trim($email);

    if (mail("na.konsta@gmail.com", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From:  \r\n")) {
        echo "сообщение успешно отправлено";
    } else {
        echo "при отправке сообщения возникли ошибки";
    }
?>