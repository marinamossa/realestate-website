<?php

require_once __DIR__ . '/bootstrap.php';

$pageTitle = 'Blog — Dubai Realty';
$pageDescription = 'Read Dubai Realty blog articles about real estate in Dubai, property investments, market trends, buying, selling and renting properties.';
$canonical = 'blog.php';

$allArticles = get_articles();
$articles = $allArticles;

$searchQuery = trim($_GET['search'] ?? '');
$categoryQuery = trim($_GET['category'] ?? '');

if (mb_strlen($searchQuery) > 100) {
	$searchQuery = mb_substr($searchQuery, 0, 100);
}

if (mb_strlen($categoryQuery) > 100) {
	$categoryQuery = mb_substr($categoryQuery, 0, 100);
}

$blogCategories = get_article_categories($allArticles);

if ($categoryQuery !== '') {
	$categoryNeedle = mb_strtolower($categoryQuery);

	$articles = array_filter($articles, function (array $article) use ($categoryNeedle): bool {
		return mb_strtolower($article['category']) === $categoryNeedle;
	});

	$articles = array_values($articles);
}

if ($searchQuery !== '') {
	$searchNeedle = mb_strtolower($searchQuery);

	$articles = array_filter($articles, function (array $article) use ($searchNeedle): bool {
		$searchText = implode(' ', [
			$article['title'],
			$article['description'],
			$article['category'],
			$article['slug'],
		]);

		return str_contains(mb_strtolower($searchText), $searchNeedle);
	});

	$articles = array_values($articles);
}

$articlesPerPage = 6;
$currentPage = (int)($_GET['page'] ?? 1);

if ($currentPage < 1) {
	$currentPage = 1;
}

$totalArticles = count($articles);
$totalPages = (int)ceil($totalArticles / $articlesPerPage);

if ($totalPages < 1) {
	$totalPages = 1;
}

if ($currentPage > $totalPages) {
	$currentPage = $totalPages;
}

$offset = ($currentPage - 1) * $articlesPerPage;
$paginatedArticles = array_slice($articles, $offset, $articlesPerPage);

$buildBlogUrl = function (int $page) use ($searchQuery, $categoryQuery): string {
	$params = [];

	if ($categoryQuery !== '') {
		$params['category'] = $categoryQuery;
	}

	if ($searchQuery !== '') {
		$params['search'] = $searchQuery;
	}

	if ($page > 1) {
		$params['page'] = $page;
	}

	$queryString = http_build_query($params);

	return page_url('blog.php' . ($queryString ? '?' . $queryString : ''));
};

?>

<?php require_once __DIR__ . '/partials/header.php'; ?>


<main class="blog-page">
	<section class="blog container">
		<div class="blog__header">
			<h2 class="blog__title">Blog</h2>

			<form action="<?= page_url('blog.php'); ?>" method="get" class="blog__search">
				<?php if ($categoryQuery !== ''): ?>
					<input
						type="hidden"
						name="category"
						value="<?= e($categoryQuery); ?>" />
				<?php endif; ?>

				<input
					type="search"
					name="search"
					id="blog_search"
					placeholder="Search..."
					value="<?= e($searchQuery); ?>" />
			</form>
		</div>

		<div class="blog__wrapper">
			<?php if ($categoryQuery !== '' || $searchQuery !== ''): ?>
				<div class="blog__filters">
					<div class="blog__filters-info">
						<?php if ($categoryQuery !== ''): ?>
							<span class="blog__filter-item">
								Category: <strong><?= e($categoryQuery); ?></strong>
							</span>
						<?php endif; ?>

						<?php if ($searchQuery !== ''): ?>
							<span class="blog__filter-item">
								Search: <strong><?= e($searchQuery); ?></strong>
							</span>
						<?php endif; ?>

						<span class="blog__filter-item">
							Found: <strong><?= $totalArticles; ?></strong>
						</span>
					</div>

					<a href="<?= page_url('blog.php'); ?>" class="blog__filters-clear">
						Clear filters
					</a>
				</div>
			<?php endif; ?>

			<div class="blog__categories">
				<a
					href="<?= page_url('blog.php'); ?>"
					class="blog__category-link <?= $categoryQuery === '' ? 'is-active' : ''; ?>"
				>
					All articles
				</a>

				<?php foreach ($blogCategories as $categoryName => $categoryCount): ?>
					<a
						href="<?= page_url('blog.php?' . http_build_query(['category' => $categoryName])); ?>"
						class="blog__category-link <?= $categoryQuery === $categoryName ? 'is-active' : ''; ?>"
					>
						<?= e($categoryName); ?>
					</a>
				<?php endforeach; ?>
			</div>

			<div class="blog__list">
				<?php if (empty($paginatedArticles)): ?>
					<p class="blog__empty">
						No articles found.
					</p>
				<?php else: ?>
					<?php foreach ($paginatedArticles as $article): ?>
						<?php require __DIR__ . '/partials/article-card.php'; ?>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<?php if ($totalPages > 1): ?>
				<div class="blog__pagination paginate">
					<ul class="paginate__list">
						<li class="paginate__item previous-page <?= $currentPage === 1 ? 'not-active-pag' : ''; ?>">
							<a href="<?= $currentPage === 1 ? '#' : $buildBlogUrl($currentPage - 1); ?>">❮</a>
						</li>

						<?php for ($page = 1; $page <= $totalPages; $page++): ?>
							<li class="paginate__item <?= $page === $currentPage ? 'active-pag' : ''; ?>">
								<a href="<?= $buildBlogUrl($page); ?>">
									<?= $page; ?>
								</a>
							</li>
						<?php endfor; ?>

						<li class="paginate__item next-page <?= $currentPage === $totalPages ? 'not-active-pag' : ''; ?>">
							<a href="<?= $currentPage === $totalPages ? '#' : $buildBlogUrl($currentPage + 1); ?>">❯</a>
						</li>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</section>
</main>
<?php require_once __DIR__ . '/partials/footer.php'; ?>