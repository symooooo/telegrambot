		<?php
		//https://api.telegram.org/bot118569545:AAFlvM1DcIhbs63TlnF_bBFmEZ4Vni2inyQ/setwebhook?url=https://siabot.herokuapp.com/execute.php
		// PARAMETRI DA MODIFICARE
		//inserite vostro indirizzo su heroku 
		//https://username.herokuapp.com/execute.php
		$WEBHOOK_URL = 'https://bernardabot.herokuapp.com/execute.php';
		//inserite il vostro token che vi ha fornito l'utente telegram @botfather
		$BOT_TOKEN = '1786197562:AAG0QT-zBvVl6SWunnxm5GBdGrKYhp_4AxI';

		// NON APPORTARE MODIFICHE NEL CODICE SEGUENTE
		$API_URL = 'https://api.telegram.org/bot' . $BOT_TOKEN .'/';
		$method = 'setWebhook';
		$parameters = array('url' => $WEBHOOK_URL);
		$url = $API_URL . $method. '?' . http_build_query($parameters);
		
		$handle = curl_init($url);

		
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
		curl_setopt($handle, CURLOPT_TIMEOUT, 60);
		$result = curl_exec($handle);
		print_r($result);
		?>
