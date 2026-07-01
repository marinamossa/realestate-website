<?php

require_once __DIR__ . '/../bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: ' . page_url('index.php'));
	exit;
}

$email = trim($_POST['email'] ?? '');
$website = trim($_POST['website'] ?? '');
$redirectUrl = $_POST['redirect_url'] ?? page_url('index.php');

if (!str_starts_with($redirectUrl, '/')) {
	$redirectUrl = page_url('index.php');
}

$redirectParts = parse_url($redirectUrl);
$redirectPath = $redirectParts['path'] ?? page_url('index.php');

parse_str($redirectParts['query'] ?? '', $redirectQuery);

unset($redirectQuery['quick_contact']);

$queryString = http_build_query($redirectQuery);

$redirectUrl = $redirectPath . ($queryString ? '?' . $queryString : '');

$successRedirect = $redirectUrl . (str_contains($redirectUrl, '?') ? '&' : '?') . 'quick_contact=success#quick-contact-form';
$errorRedirect = $redirectUrl . (str_contains($redirectUrl, '?') ? '&' : '?') . 'quick_contact=error#quick-contact-form';

$errors = [];

if ($website !== '') {
	header('Location: ' . $successRedirect);
	exit;
}

if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$errors[] = 'Valid email is required.';
}

if (mb_strlen($email) > 150) {
	$errors[] = 'Email is too long.';
}

if (!empty($errors)) {
	header('Location: ' . $errorRedirect);
	exit;
}

$requestData = [
	'created_at' => date('Y-m-d H:i:s'),
	'form_name' => $_POST['form_name'] ?? 'Quick contact form',
	'email' => $email,
	'page' => $redirectUrl,
];

$mailTo = SITE_EMAIL;
$mailSubject = 'New quick contact request from Dubai Realty';

$mailMessage = "New quick contact request\n\n";
$mailMessage .= "Email: {$email}\n";
$mailMessage .= "Page: {$redirectUrl}\n";
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
		INSERT INTO quick_contact_requests (email, page, mail_sent, created_at)
		VALUES (:email, :page, :mail_sent, :created_at)
	");

	$stmt->execute([
		'email' => $email,
		'page' => $redirectUrl,
		'mail_sent' => $mailSent ? 1 : 0,
		'created_at' => $requestData['created_at'],
	]);

	$requestData['db_saved'] = true;
} catch (PDOException $error) {
	$requestData['db_saved'] = false;
	$requestData['db_error'] = $error->getMessage();
}

$logFile = __DIR__ . '/../storage/quick-contact-requests.log';

file_put_contents(
	$logFile,
	json_encode($requestData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL,
	FILE_APPEND | LOCK_EX
);

header('Location: ' . $successRedirect);
exit;