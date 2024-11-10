<?php
if (isset($_POST['ip'])) {$ip = $_POST['ip'];}
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
if (isset($_POST['offer'])) {$offer = $_POST['offer'];}
if (isset($_POST['size'])) {$size = $_POST['size'];}
if (isset($_POST['country'])) {$country = $_POST['country'];}
if (isset($_POST['price'])) {$price = $_POST['price'];}
if (isset($_POST['language'])) {$language = $_POST['language'];}
if (isset($_POST['offers'])) {$offers = $_POST['offers'];}
$ip = $_SERVER['REMOTE_ADDR'];

$address = "test@ministiralkauz.store";

$mes = "<span style='font-size: 15px; line-height: 18px;'><b>Имя:</b> $name<br><b>Телефон:</b> $phone<br><b>Оффер:</b> $offer<br><b>Размер:</b> $size<br><b>Страна:</b> $country<br><b>Цена:</b> $price<br><b>Язык:</b> $language<br><b>Товар:</b> $offers<br><b>IP:</b> $ip</span>";

$sub='ЗАЯВКА НАБОР АВТОХИМИИ';
$emails='info';

if (empty($phone))
	{
		echo 'error';
	}
else
	{
		 $send = mail ($address,$sub,$mes,"Content-type:text/html; charset = utf-8\r\nFrom:$emails");
	}



// Next redirect dependance

$next_url = 'thanks.html';
if(is_dir('upsell')){
	$next_url = 'upsell/index.php';
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta http-equiv="refresh" content="0; url=<?php echo $next_url; ?>">
		<title>Спасибо!</title>
		<meta name="generator">
		<style type="text/css">
	</head>
	<body>
	</body>
</html>
