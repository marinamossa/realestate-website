<?php
require_once __DIR__ . '/bootstrap.php';

$articles = get_articles();

$slug = $_GET['slug'] ?? '';

$currentArticle = find_article_by_slug($articles, $slug);

if (!$currentArticle) {
	http_response_code(404);

	$pageTitle = 'Article not found — Dubai Realty';
	$pageDescription = 'The requested article was not found.';
	$canonical = 'article.php';

	require_once __DIR__ . '/partials/header.php';
	?>

<?php require __DIR__ . '/partials/error-404.php'; ?>
<?php
	require_once __DIR__ . '/partials/footer.php';
	exit;
}

$pageTitle = $currentArticle['title'] . ' — Dubai Realty';
$pageDescription = $currentArticle['description'];
$canonical = 'article.php?slug=' . $currentArticle['slug'];
$ogImage = $currentArticle['large_image'];
$ogImageAlt = $currentArticle['title'];
$ogType = 'article';
$recommendedArticlesTitle = 'You may also like';

require_once __DIR__ . '/partials/header.php';
?>

<main class="article-page">
	<?php require __DIR__ . '/partials/article-content.php'; ?>
</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>