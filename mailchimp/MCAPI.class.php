<?php

class MCAPI {
	public $api_key;
	public $list_id;
	public $errorMessage;
	public function __construct($api_key) {
		$this->api_key = $api_key;
	}

	public function listSubscribe($list_id, $email, $fname = '', $lname='') {

		if (!function_exists('curl_version')) {
			$this->errorMessage = 'CURL extension needed';
			return false;
		}

		//checking email
		if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false){
			$this->errorMessage = 'Wrong Email';
			return false;
		}

		// MailChimp API credentials
		$api_key = $this->api_key;

		// MailChimp API URL
		$memberID = md5(strtolower($email));
		$dataCenter = substr($api_key,strpos($api_key,'-')+1);
		$url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . $memberID;

		// member information
		$json = json_encode([
			'email_address' => $email,
			'status'        => 'subscribed',
			'merge_fields'  => [
				'FNAME'     => strip_tags(trim($fname)),
				'LNAME'     => strip_tags(trim($lname))
			]
		]);

		// send a HTTP POST request with curl
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		$result = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		// store the status message based on response code
		if ($httpCode == 200) {
			$this->errorMessage = 'You have successfully subscribed';
			return true;
		} else {
			switch ($httpCode) {
				case 214:
					$this->errorMessage = 'You are already subscribed.';
					break;
				case 0:
					$this->errorMessage = 'Some problem occurred. Wrong API key?';
					break;
				default:
					$this->errorMessage = 'Some problem occurred, please try again.';
					break;
			}
			return false;
		}
	}
}