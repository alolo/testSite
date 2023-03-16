<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
    <title>Ваше сообщение успешно отправлено</title>
</head>
 
<body>
 
<?php
	$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
 
	if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) and !empty($_POST['message'])){
		$name = trim(strip_tags($_POST['name']));
		$phone = trim(strip_tags($_POST['phone']));
		$mail = trim(strip_tags($_POST['mail']));
		$message = trim(strip_tags($_POST['message']));
        $to = 'alo32@yandex.ru';
        $password = 'Alolo32alo';
 
        $mail->Mailer = 'smtp';
        $mail->Host = 'ssl://smtp.yandex.ru';
        $mail->Port = 465;
        $mail->SMTPAuth = true;
        $mail->Username = $to; // ваш email - тот же что и в поле From:
        $mail->Password = $password; // ваш пароль;
        
		mail($to, 'Вам написал: '.$name.'<br />Его номер: '.$phone.'<br />Его почта: '.$mail.'<br />Его сообщение: '.$message,"Content-type:text/html;charset=UTF-8");
 
		echo "Ваше сообщение успешно отправлено!<Br> Вы получите ответ в ближайшее время<Br> $back";
 
		exit;
	} 
	else {
		echo "Для отправки сообщения заполните все поля! $back";
		exit;
	}
?>
</body>
