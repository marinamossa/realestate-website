<?php
require_once __DIR__ . '/../bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: ' . page_url('contact.php'));
	exit;
}

$name = trim($_POST['user_name'] ?? '');
$email = trim($_POST['user_email'] ?? '');
$subject = trim($_POST['subject_message'] ?? '');
$message = trim($_POST['user_message'] ?? '');
$website = trim($_POST['website'] ?? '');

$errors = [];

if ($website !== '') {
	header('Location: ' . page_url('contact.php?contact=success#contact-form'));
	exit;
}

if ($email === '') {
	$errors[] = 'Email is required.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'Email is invalid.';
}

if ($message === '') {
	$errors[] = 'Message is required.';
}

if (mb_strlen($name) > 100) {
	$errors[] = 'Name is too long.';
}

if (mb_strlen($email) > 150) {
	$errors[] = 'Email is too long.';
}

if (mb_strlen($subject) > 150) {
	$errors[] = 'Subject is too long.';
}

if (mb_strlen($message) > 3000) {
	$errors[] = 'Message is too long.';
}

if (!empty($errors)) {
	header('Location: ' . page_url('contact.php?contact=error#contact-form'));
	exit;
}

$requestData = [
	'created_at' => date('Y-m-d H:i:s'),
	'form_name' => $_POST['form_name'] ?? 'Contact page form',
	'name' => $name,
	'email' => $email,
	'subject' => $subject,
	'message' => $message,
];

$mailTo = SITE_EMAIL;
$mailSubject = 'New message from Dubai Realty contact form';

$mailMessage = "New contact form message\n\n";
$mailMessage .= "Name: {$name}\n";
$mailMessage .= "Email: {$email}\n";
$mailMessage .= "Subject: {$subject}\n";
$mailMessage .= "Message:\n{$message}\n\n";
$mailMessage .= "Date: {$requestData['created_at']}\n";

$mailHeaders = [
	'From: ' . SITE_EMAIL,
	'Reply-To: ' . $email,
	'Content-Type: text/plain; charset=UTF-8',
];

$mailSent = mail($mailTo, $mailSubject, $mailMessage, implode("\r\n", $mailHeaders));

$requestData['mail_sent'] = $mailSent;

try {
	$db = get_db();

	$stmt = $db->prepare("
		INSERT INTO contact_requests (name, email, subject, message, mail_sent, created_at)
		VALUES (:name, :email, :subject, :message, :mail_sent, :created_at)
	");

	$stmt->execute([
		'name' => $name ?: null,
		'email' => $email,
		'subject' => $subject ?: null,
		'message' => $message,
		'mail_sent' => $mailSent ? 1 : 0,
		'created_at' => $requestData['created_at'],
	]);

	$requestData['db_saved'] = true;
} catch (PDOException $error) {
	$requestData['db_saved'] = false;
	$requestData['db_error'] = $error->getMessage();
}

$logFile = __DIR__ . '/../storage/contact-requests.log';

file_put_contents(
	$logFile,
	json_encode($requestData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL,
	FILE_APPEND | LOCK_EX
);

header('Location: ' . page_url('contact.php?contact=success#contact-form'));
exit;