<?php

if (isset($_POST)) {
	if (isset($_POST["name"]) & isset($_POST["email"]) & isset($_POST["message"])) {

		require_once('connector/MysqliDb.php');
		require_once('connector/cn.php');
		$date = new DateTime("now", new DateTimeZone('Iran'));

		$data = array(
			"name" => $_POST["name"],
			"email" => $_POST["email"],
			"messege" => $_POST["message"],
			"setdate" => $date->format('Y-m-d H:i:s'),
			"ip" => $_SERVER['REMOTE_ADDR'],
			"answer_status" => '0'
		);
		$id = $db->insert('messege', $data);
		if ($id) {
			header("Location: index.php?msg=sent#Contact");
		} else {
			header("Location: index.php?msg=errmsg#Contact");
		}


		// require_once('PHPMailer/class.phpmailer.php');
		// require_once('PHPMailer/class.smtp.php');

		// use PHPMailer\PHPMailer\PHPMailer;
		// use PHPMailer\PHPMailer\SMTP;
		// use PHPMailer\PHPMailer\Exception;



		// $mail = new PHPMailer(true);
		// $mail->IsSMTP();
		// try
		// {
		// 	$mail->Host='smtp.gmail.com';
		// 	$mail->SMTPAuth=true;
		// 	$mail->SMTPSecure="ssl";
		// 	$mail->Port=465;
		// 	$mail->Username="abedinia313@gmail.com";
		// 	$mail->Password="2080642359";
		// 	$mail->AddAddress($tested["email"]);
		// 	$mail->SetFrom("abedinia313@gmail.com","پروژه پنل ادمین ");
		// 	$mail->Subject='';
		// 	$mail->CharSet="UTF-8";
		// 	$mail->ContentType="text/htm";
		// 	$mail->MsgHTML('salaaaaaaaaaaaaaaaaaaaaaaaaaaaam');
		// 	$mail->Send();
		// 	// header("Location: activation_check.php");


		// }
		// catch(phpmailerException $e)
		// {
		// 	echo $e->errorMessage();
		// }
		// catch(Exception $e)
		// {
		// 	echo $e->getMessage();
		// }

		// 	$mail->SMTPDebug = 1;
		// 	$mail->SMTPAuth = true;
		// 	$mail->SMTPSecure = "tls";
		// 	$mail->Port = 587;
		// 	$mail->Host = "smtp.gmail.com";
		// 	$mail->Username = "abediniamirhossein1996@gmail.com";
		// 	$mail->Password = "Amirr512@";

		// 	$mail->From = "abediniamirhossein1996@gmail.com";
		// 	$mail->FromName = "Amirabedini";

		// 	$mail->addAddress("abedinia313@gmail.com", "<destination name>");

		// 	$mail->isHTML(true);

		// 	$mail->Subject = "Mailing with PHPMailer";
		// 	$mail->Body = "<b>Congratulation</b>";
		// 	$mail->AltBody = "Congratulation";

		// 	try {
		// 		$mail->send();
		// 		echo "Message has been sent successfully";
		// 		die;
		// 		header("Location: index.php#Contact");
		// 	} catch (Exception $e) {
		// 		echo "Mailer Error: " . $mail->ErrorInfo;
		// 		die;
		// 		header("Location: index.php#Contact");
		// 	}
		// } else {
		// 	echo "22222222";
		// }
	}else{
		header("Location: index.php");
	}
}else{
	header("Location: index.php");
}
