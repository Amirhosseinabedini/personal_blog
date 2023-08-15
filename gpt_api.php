<?php
// Replace 'your_api_key' with your actual API key from OpenAI
$api_key = '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';

// Set the API endpoint
$api_endpoint = 'https://api.openai.com/v1/engines/text-davinci-002/completions';

$cv_data2="
mein Name ist Amirhossein Abedini und ich freue mich, mich Ihnen heute als PHP-Backend-Programmierer vorzustellen. Ich bin 27 Jahre alt und komme aus dem Iran.
Ich habe meinen Abschluss als Computeringenieur an der Universität gemacht. In dieser Zeit habe ich auch verschiedene Fähigkeiten erworben, die mir im Bereich der Webentwicklung von Nutzen sind.
Eine meiner wichtigsten beruflichen Erfahrungen war jedoch meine zweieinhalbjährige Tätigkeit als Backend-Entwickler bei der Firma Dornica. Anfangs habe ich hauptsächlich mit Core PHP gearbeitet, aber im Laufe der Zeit habe ich meine Kenntnisse in PHP-OOP und PHP-MVC weiterentwickelt und schließlich in Laravel-Projekten programmiert. Unsere Hauptprojekte waren CMS für nationale Behörden mit einer großen Anzahl von Benutzern. Meine Aufgaben umfassten die Verwaltung von Datenbanksystemen und das Schreiben von Abfragen, um die Leistung der Anwendungen zu verbessern. In dieser Zeit habe ich auch mit SQL-Datenbanksystemen gearbeitet und Erfahrungen mit der agilen Entwicklungsmethode, insbesondere Scrum, gesammelt.
Mein Ziel ist es, meine Karriere in einem innovativen und technologieorientierten Unternehmen fortzusetzen, das mir die Möglichkeit bietet, mein volles Potenzial als PHP-Backend-Programmierer auszuschöpfen. Ich bin fest davon überzeugt, dass meine umfangreichen Erfahrungen und Kenntnisse ideal zu den Anforderungen einer Position in Deutschland passen. Ich bin motiviert, mich kontinuierlich weiterzuentwickeln, neue Technologien zu erlernen und innovative Lösungen zu finden, um den Erfolg des Unternehmens voranzutreiben. Ich bin bereit, mein Wissen und meine Fähigkeiten einzusetzen, um effiziente und leistungsstarke Webanwendungen zu entwickeln und somit zum Wachstum und Erfolg des Unternehmens beizutragen. Ich freue mich darauf, Teil eines dynamischen Teams zu sein und gemeinsam an spannenden Projekten zu arbeiten.";

$cv_data ="Amirhossein Abedini
Email: abediniamirhossein1996@gmail.com
Phone: +98 9111106131
Location: Tehran, Iran

Über mich:
Mit 4 Jahren Berufserfahrung im Webentwicklungssystem und 3 Jahren in agiler Entwicklung mit Schwerpunkt auf PHP habe ich Fachwissen und Kommunikationsfähigkeiten im Geschäftsumfeld erworben. Als energiegeladene und enthusiastische Person strebe ich danach, innovative Lösungen zu entwickeln und die Benutzererfahrung zu verbessern.

Fähigkeiten:
TECHNISCH:
- PHP - Laravel - Symfony - PHP unit testing - JavaScript - jQuery - React - HTML - CSS - Bootstrap - Docker - MySQL - Typo3 - October CMS - Wordpress - Grundkenntnisse in C++ - Python - Datenbankkonversion - Web Scraping - Grundkenntnisse Netzwerk (Network++) - math lab - Regex - Microsoft Office - GitHub - VS code - PhpStorm

VERWALTUNG:
Initiative - Kundenkontakt - Code analysieren - Kommunikationsfähigkeit - Einfallsreichtum - Projekt-Design - Präsentation - Agile/SCRUM - Planung - Lehren

SPRACHEN:
- Deutsch (B1) - Englisch (A2) - Persian (Muttersprache)

Qualifikationen:
- Building Web App in PHP (Coursera)
- Structured Query Language (Coursera)
- JavaScript, jQuery, and JSON (Coursera)
- PHP for Beginners (Udemy)
- PHP with Laravel (Udemy)

Akademische Kenntnisse:
Rozbahan-Universität
BEng Computer Science (Zab Zeugnisbewertung)
09.2018 – 12.2022
Sari, Iran
- Hoher akademischer Durchschnitt
- Zusammenarbeit in der Hilfsausbildung für Studenten

KONTAKT UND DATEN:
Website: www.amirabedini.net
LinkedIn: in/amirhosseinabedini
GitHub: github.com/amirhosseinabedini

Fullstack Entwickler

Berufserfahrung:

BACK-END ENTWICKLER
Dornica Unternehmen
Oktober 2020 - April 2023
Sari, Iran
- Verwaltung von Datenbanksystemen und Projekten mit PHP
- Code Debuggen, Testen der Struktur von Websites mit PHP und MYSQL
- Die Algorithmen-Analyse des Codes, Definition der Produktvision und Festlegung von Zielen
- Analysieren und Überprüfen der Kundenbedürfnisse, Schreiben von Aufgaben, Verwaltungsaufgaben

FRONT-END ENTWICKLER
Dadekav21 Unternehmen
März 2020 - September 2020
- Frontend-Programmierung mit Html, Css, Javascript, ReactJs
- Aktualisierung und Erweiterung bestehender Webseiten

WORDPRESS ENTWICKLER
Freiberufler
September 2019 - März 2020
- Programmierung und Entwicklung von WordPress-Webseiten mit Elementor

Letzte Projekte:

Behsazi nationales Projekt
Dornica Unternehmen
04.2021 - 03.2023
- Entwicklung und Optimierung eines Systems zur Auszahlung von Krediten für die Renovierung von Gebäuden in Dörfern und Städten mit weniger als 2.500 Einwohnern
- Gedeckte Fälle: +2,500,000

Payesh nationales Projekt
Dornica Unternehmen
04.2021 - 03.2023
- Entwicklung und Optimierung des Systems zur Bewertung von Naturkatastrophen (Überschwemmungen, Erdbeben usw) und daraus resultierenden Schäden
- Registrierte Vorfälle: +150
- Anzahl der registrierten beschädigten Einheiten: 1,600,000

Schulverwaltungssystem
Dornica Unternehmen
01.2022 - 02.2022
- Programmierung des Schulsimulationssystems basierend auf den Bedürfnissen der Schüler
Mehr in meiner Website sehen...
";
$jobtitle ='PHP Software-Entwickler (m/w/d)';
$unternehmen ='NUE GO! Express & Logistics GmbH';
$location ='Nürnberg, Mittelfranken';
$desc ='IHRE AUFGABEN

 ✅ Durchführung von Projekten innerhalb des PHP - Frameworks Symfony (Konzeption, Umsetzung & Budgetplanung)
 ✅ API / Schnittstellen- Entwicklung zur Anbindung von Fremdsystemen
 ✅ Teil / Projektleitung von Full-Lifecycle Implementierungen neuer Technologien und Systemen
 ✅ Kontinuierliche Pflege und Weiterentwicklung des PHP basierenden ERP - Systems
 ✅ Regelmäßiger - Austausch mit seinen GO!legen (m/w/d)

IHR PROFIL

 ✅ Sie konnten bereits Berufserfahrung (mind. 2 Jahre) in einer vergleichbaren Position als Webentwickler sammeln
 ✅ Sie sind kreativ und besitzen die Fähigkeit sowohl benutzerfreundliche als auch ansprechende Oberflächen zu gestalten. Erfahrungen in einem modernen PHP-Framework (z.B. Symfony) können dementsprechend von Vorteil sein
 ✅ Idealerweise konnten Sie bereits Erfahrung in der Webentwicklung mit PHP (oder Python) und im Betrieb von Frontend-Fundamentals (HTML, CSS & JavaScript) sammeln
 ✅ Der Umgang mit Git ist Ihnen idealerweise vertraut und Sie besitzen Kenntnisse über Datenbanken (MySQL/MariaDB, ProstgreSQL,o.ä.)
 ✅ Ihre deutschen Sprachkenntnisse sind verhandlungssicher (Level C1) und Sie unterstützen Ihr künftiges Team auch gern in Präsenz im Büro?
 ✅ Sie lieben Teamarbeit, arbeiten gerne abwechslungsreich und selbst organisiert, sind Fan von professioneller Softwareentwicklung und möchten Ihre Skills & Fähigkeiten weitergeben als auch weiterentwickeln? Dann machen Sie diese Herausforderung zu Ihrem neuen Projekt.

ÜBER UNS

GO! bietet unter dem Motto „Alles außer_gewöhnlich“ ein breites Portfolio an Logistiklösungen. In mehr als 100 Stationen in Europa sowie mit unserem weltweiten Partnernetzwerk stellen wir uns den verschiedensten Herausforderungen unserer Kunden und befördern dabei mit unseren 1.400 eigenen Mitarbeitern und 1.700 Fahrern und Kurieren (m/w/d) an 365 Tagen im Jahr rund um die Uhr über 9,7 Millionen Sendungen.';
// Prepare the headers
$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer ' . $api_key
];

$finall_data2 ='Ich bin '.$jobtitle.' bei '.$unternehmen . ' in ' .$location.'\n und ich wollte gerne eine motivation anschreiben in weniger als 160 Wörter schreiben. mein daten : \n'.$cv_data2;

// Prepare the data to be sent as JSON
// echo $finall_data2;
$data = [
    'prompt' => "schreib mir einen motivattiven anschreiben als php entwickler auf deutsch",
    'temperature' => 0,
    'max_tokens' => 1000,
];
// echo $data['prompt'];die;
// Function to make the API request
function make_api_request($url, $headers, $data) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $response = curl_exec($ch);
    $http_status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    return ['status_code' => $http_status_code, 'response' => $response];
}

// Make the API request with rate limiting (exponential backoff)
$max_retries = 5;
$retry_count = 0;

do {
    $api_response = make_api_request($api_endpoint, $headers, $data);
    $http_status_code = $api_response['status_code'];
    $response = $api_response['response'];

    if ($http_status_code === 429) {
        // Wait for an increasing amount of time before retrying
        $wait_time = (2 ** $retry_count) * 100000; // Microseconds
        usleep($wait_time);
        $retry_count++;
    } elseif ($http_status_code !== 200) {
        echo 'HTTP Error: ' . $http_status_code;
        die();
    }
} while ($http_status_code === 429 && $retry_count < $max_retries);

// Decode the JSON response
$json_response = json_decode($response, true);

// Output the entire response for inspection
echo '<pre>';
// var_dump($json_response['choices'][0]['text']);
print_r($json_response);

echo '</pre>';
?>
