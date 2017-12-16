<?php 
session_start();
		
		//API Details
		$username = 'marutisoft100@gmail.com';
		$hash = '54664f6337dd6d466b5c6f0fb4f750f7d998bda39f0c8a36f7b58c5ff9f84e59';
		
		// Message details
		$custno = $_POST['Phonetwo'];
		$sender = urlencode('TXTLCL');
		$otp    = rand(100000,1000000);

		// Message for customer
		$numbers = array($custno);
		$msgsms='Dear '.$custno.', Your OTP is '.$otp.', Thanks Team Invitation';
		$message = rawurlencode($msgsms);
		$numbers = implode(',', $numbers);
		

		// Prepare data for POST request
		$data1 = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message);


		
		// Send the POST request with cURL
		$ch = curl_init('http://api.textlocal.in/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);


		$msg_response = json_decode($response,true);
		if(!empty($msg_response['warnings'])){
			//print_r($msg_response['warnings'][0]['message']);
			echo  0;
			//echo $otp;
		}else{
			//print_r('Please check the otp sent to '. $custno);
			echo $_SESSION['otp'] = $otp;
			//echo  1;
		}
		//die;
		
		//echo $msgsms;
?>