<?php



// require 'phpmailer/class.phpmailer.php';

require 'vendor/autoload.php'; // Include Composer's autoloader

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

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
	$mail->MsgHTML('    
	<h3>Bewerbung als PHP Developer</h3>
	<p>Sehr geehrte Damen und Herren,</p>
    <p><b>Sie suchen ein strukturiertes Organisationstalent? Struktur und Organisation sind meine Kernkompetenzen. Daher möchte ich mich Ihnen gerne ausführlicher vorstellen.</b></p>
    <p>Mein Name ist Amirhossein Abedini, und ich bin ein <b>Webentwickler</b> mit <u>vier Jahren</u> Erfahrung im Bereich der Front- und Back-End-Programmierung. Ich bin ledig, 27 Jahre alt und verfüge über einen Bachelor-Abschluss in Computersoftware.</p>
    <p>Ich beherrsche verschiedene Programmiersprachen wie <b>PHP (OOP-MVC), Laravel</b>, MySQL, Scrum für das Back-End und React, jQuery, JavaScript, CSS, HTML und Regex für das Front-End. Auf meiner Website und in meinem <a href="https://github.com/Amirhosseinabedini" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://github.com/Amirhosseinabedini&amp;source=gmail&amp;ust=1690790595508000&amp;usg=AOvVaw3Yt0toh875RzcD2xY_gXiQ">Git-Repository</a> finden Sie mein <a href="https://amirabedini.net/" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://amirabedini.net/&amp;source=gmail&amp;ust=1690790595508000&amp;usg=AOvVaw2xlByleIvozTTmdJzcAR81">Portfolio</a>, um meine Arbeit besser kennenzulernen.</p>
    <p>Während meiner Arbeit habe ich sowohl als Freiberufler als auch vor Ort in drei Unternehmen meine Programmier- und Teamfähigkeiten verbessert. Meine wichtigste Berufserfahrung war die Arbeit als Backend-PHP-Entwickler bei Dornika, einem Unternehmen, das an nationalen Projekten mit einer hohen Anzahl von Benutzern beteiligt war.</p>
    <p>In diesem Projekt habe ich mich vor allem mit der Optimierung von Datenbankabfragen beschäftigt, um die Geschwindigkeit des Systems zu verbessern. Die Arbeit im Team hat mir viel Freude bereitet und meine Teamfähigkeit gestärkt.</p>
    <p>Ich bin überzeugt, dass meine Fähigkeiten, Kenntnisse und Erfahrungen im Bereich der Webentwicklung und Programmierung in den letzten vier Jahren einen wertvollen Beitrag für Ihr Unternehmen leisten können. Zudem verfüge ich über Führungsqualitäten, die ich in früheren Unternehmen unter Beweis gestellt habe.</p>
    <p>Mit großem Interesse habe ich die Anzeige an Ihrer Stelle als PHP Developer (m/w) gelesen. Im Anhang finden Sie daher meine Bewerbungsunterlagen.</p>
    <p>Bei Rückfragen stehe ich Ihnen gerne zur Verfügung. Ich freue mich darauf, Sie in einem persönlichen Vorstellungsgespräch kennenzulernen.</p>
    <br>
    <p>Mit freundlichen Grüßen,</p>
    <p>Amirhossein Abedini</p>
    <p>Tehran, Iran</p>
    <p>+989111106131</p>
    <p><a href="mailto:abediniamirhossein1996@gmail.com">abediniamirhossein1996@gmail.com</a></p>
    <p>Weitere Angaben meiner beruflichen Tätigkeit finden Sie unter:</p>
    <p><a href="https://www.amirabedini.net">Website: www.amirabedini.net</a></p>
    <p><a href="https://www.linkedin.com/in/amirhosseinabedini">LinkedIn: linkedin.com/in/amirhosseinabedini</a></p>
    <p><a href="https://github.com/Amirhosseinabedini">GitHub: github.com/Amirhosseinabedini</a></p>
');

	// Add attachments if needed
	// foreach ($_FILES["attachment"]["name"] as $k => $v) {
	//     $mail->AddAttachment($_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k]);
	// }

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
