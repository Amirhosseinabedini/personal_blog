<?php
include "PHPMailer/class.phpmailer.php";
$_POST["name"]="amir";
$_POST["email"] = "abedinia313@gmail.com";
$_POST["message"] = "first message";

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
			// var_dump(3333);

		} else {
			header("Location: index.php?msg=errmsg#Contact");
			// var_dump(4444);

		}



		// $mail=new PHPMailer(true);
		// $mail->IsSMTP();
		// try
		// {
		// 	$mail->Host='smtp.gmail.com';
		// 	$mail->SMTPAuth=true;
		// 	$mail->SMTPSecure="ssl";
		// 	$mail->Port=465;
		// 	$mail->Username="abediniamirhossein1996@gmail.com";
		// 	$mail->Password="Amirr512@";
		// 	$mail->AddAddress($_POST["email"]);
		// 	$mail->SetFrom("abediniamirhossein1996@gmail.com","پروژه پنل ادمین ");
		// 	$mail->Subject='فعال سازی حساب کاربری';
		// 	$mail->CharSet="UTF-8";
		// 	$mail->ContentType="text/htm";
		// 	$mail->MsgHTML('1111111111111111111111111111');
		// 	$mail->Send();
		// 	// header("Location: activation_check.php");
		// }
		// catch(phpmailerException $e)
		// {
		// 	echo $e->errorMessage();
		// }
		// catch(Exception $e)
		// {
		// 	echo $mail->ErrorInfo;
		// }
		
		
	}else{
		header("Location: index.php");
		// var_dump(11111);
	}
}else{
	header("Location: index.php");
	// var_dump(22222);

}
