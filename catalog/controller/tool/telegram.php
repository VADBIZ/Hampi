<?php
class ControllerToolTelegram extends Controller {
	public function index($error) {
		// токен бота
		define('TELEGRAM_TOKEN', '5478123142:AAH_dNJ9ktu5FzQoUUPmqCziHuBO-a0HGcc');
		// ваш внутренний ID
		define('TELEGRAM_CHATID', '-760137528');
		
		$message = $error;
		
		$ch = curl_init('https://api.telegram.org/bot'.TELEGRAM_TOKEN.'/sendMessage?chat_id='.TELEGRAM_CHATID.'&text='.$message); // URL
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
		curl_exec($ch); // Делаем запрос
		curl_close($ch); // Завершаем сеанс cURL
	}
}