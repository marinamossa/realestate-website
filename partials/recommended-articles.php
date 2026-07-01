<?php

$recommendedArticles = [];

if (isset($currentArticle)) {
	$sameCategoryArticles = array_filter($articles, function (array $article) use ($currentArticle): bool {
		return $article['slug'] !== $currentArticle['slug']
			&& $article['category'] === $currentArticle['category'];
	});

	$otherArticles = array_filter($articles, function (array $article) use ($currentArticle): bool {
		return $article['slug'] !== $currentArticle['slug']
			&& $article['category'] !== $currentArticle['category'];
	});

	$recommendedArticles = array_merge(
		array_values($sameCategoryArticles),
		array_values($otherArticles)
	);
} else {
	$recommendedArticles = $articles;
}

$recommendedArticles = array_slice($recommendedArticles, 0, 3);

?>

<section class="rec-articles container">
	<h2 class="rec-articles__title">
		<?= e($recommendedArticlesTitle ?? 'Recommended articles'); ?>
	</h2>

	<a href="<?= page_url('blog.php'); ?>" class="rec-articles__link-page">
		View all articles
	</a>

	<div class="rec-articles__box">
		<?php foreach ($recommendedArticles as $article): ?>
			<?php require __DIR__ . '/reco-article-card.php'; ?>
		<?php endforeach; ?>
	</div>
</section>