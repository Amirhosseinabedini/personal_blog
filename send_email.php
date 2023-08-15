<?php
session_start();
require 'vendor/autoload.php'; // Include Composer's autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('connector/MysqliDb.php');
require_once('connector/cn.php');

if (isset($_POST)) {
	if (isset($_POST["captcha"]) & ($_POST["captcha"] == $_SESSION['captcha_id'])) {
		if (isset($_POST["name"]) & isset($_POST["email"]) & isset($_POST["message"])) {


			$date = new DateTime("now", new DateTimeZone('Iran'));

			$data = array(
				"name" => $_POST["name"],
				"email" => $_POST["email"],
				"messege" => $_POST["message"],
				"setdate" => $date->format('Y-m-d H:i:s'),
				"ip" => $_SERVER['REMOTE_ADDR'],
				"answer_status" => '0'
			);
			$mail = new PHPMailer(true);

			$mail->IsSMTP();
			try {
				$mail->SMTPDebug = 0; // Set to 2 or higher for debugging
				$mail->SMTPAuth = true;
				$mail->SMTPSecure = 'ssl'; // Use 'tls' or 'ssl' depending on the port
				$mail->Port = 465; // Use 587 for TLS, 465 for SSL
				$mail->Host = 'smtp.gmail.com';
				$mail->Mailer = 'smtp';
				$mail->Username = 'abediniamirhossein1996@gmail.com';
				$mail->Password = 'nimfofxczujhnzhh'; // Use the App Password here

				$mail->SetFrom('abediniamirhossein1996@gmail.com', 'Amir Abedini');
				$mail->AddReplyTo('abediniamirhossein1996@gmail.com', 'abediniamirhossein1996@gmail.com');
				$mail->AddAddress('abediniamirhossein96@gmail.com'); // Add at least one recipient here

				$mail->Subject = 'Bewerbung  als [jobstelle]';
				$mail->WordWrap = 80;
				$mail->MsgHTML(' ');
				$mail->IsHTML(true);

				if ($mail->Send()) {
					echo "Message Sent OK\n";
				} else {
					echo "Message could not be sent. Mailer Error: ", $mail->ErrorInfo;
				}
			} catch (phpmailerException $e) {
				echo $e->errorMessage(); // Pretty error messages from PHPMailer
			} catch (Exception $e) {
				echo $e->getMessage(); // Boring error messages from anything else!
			}
		} else {
			header("Location: index.php");
		}
	} else {
		header("Location: index.php?err=10#Contact");
	}
} else {
	header("Location: index.php");
}
