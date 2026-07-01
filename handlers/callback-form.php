<?php
require_once __DIR__ . '/../bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
	header('Location: ' . page_url('index.php'));
	exit;
}

$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$website = trim($_POST['website'] ?? '');
$redirectUrl = $_POST['redirect_url'] ?? page_url('index.php');

if (!str_starts_with($redirectUrl, '/')) {
	$redirectUrl = page_url('index.php');
}

$redirectParts = parse_url($redirectUrl);
$redirectPath = $redirectParts['path'] ?? page_url('index.php');

parse_str($redirectParts['query'] ?? '', $redirectQuery);

unset($redirectQuery['callback']);

$queryString = http_build_query($redirectQuery);

$redirectUrl = $redirectPath . ($queryString ? '?' . $queryString : '');

$successRedirect = $redirectUrl . (str_contains($redirectUrl, '?') ? '&' : '?') . 'callback=success';
$errorRedirect = $redirectUrl . (str_contains($redirectUrl, '?') ? '&' : '?') . 'callback=error';

$errors = [];

if ($website !== '') {
	header('Location: ' . $successRedirect);
	exit;
}

if ($name === '') {
	$errors[] = 'Name is required.';
}

if ($phone === '') {
	$errors[] = 'Phone is required.';
}

if (mb_strlen($name) > 100) {
	$errors[] = 'Name is too long.';
}

if (mb_strlen($phone) > 50) {
	$errors[] = 'Phone is too long.';
}

if (!empty($errors)) {
	header('Location: ' . $errorRedirect);
	exit;
}

$requestData = [
	'created_at' => date('Y-m-d H:i:s'),
	'form_name' => $_POST['form_name'] ?? 'Callback popup form',
	'name' => $name,
	'phone' => $phone,
	'page' => $redirectUrl,
];

$mailTo = SITE_EMAIL;
$mailSubject = 'New callback request from Dubai Realty website';

$mailMessage = "New callback request\n\n";
$mailMessage .= "Name: {$name}\n";
$mailMessage .= "Phone: {$phone}\n";
$mailMessage .= "Page: {$redirectUrl}\n";
$mailMessage .= "Date: {$requestData['created_at']}\n";

$mailHeaders = [
	'From: ' . SITE_EMAIL,
	'Reply-To: ' . SITE_EMAIL,
	'Content-Type: text/plain; charset=UTF-8',
];

$mailSent = mail($mailTo, $mailSubject, $mailMessage, implode("\r\n", $mailHeaders));

$requestData['mail_sent'] = $mailSent;

try {
	$db = get_db();

	$stmt = $db->prepare("
		INSERT INTO callback_requests (name, phone, page, mail_sent, created_at)
		VALUES (:name, :phone, :page, :mail_sent, :created_at)
	");

	$stmt->execute([
		'name' => $name,
		'phone' => $phone,
		'page' => $redirectUrl,
		'mail_sent' => $mailSent ? 1 : 0,
		'created_at' => $requestData['created_at'],
	]);

	$requestData['db_saved'] = true;
} catch (PDOException $error) {
	$requestData['db_saved'] = false;
	$requestData['db_error'] = $error->getMessage();
}

$logFile = __DIR__ . '/../storage/callback-requests.log';

file_put_contents(
	$logFile,
	json_encode($requestData, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . PHP_EOL,
	FILE_APPEND | LOCK_EX
);

header('Location: ' . $successRedirect);
exit;