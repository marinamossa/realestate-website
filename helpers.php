<?php

function asset(string $path): string
{
	return SITE_URL . ltrim($path, '/');
}

function page_url(string $page): string
{
	return SITE_URL . ltrim($page, '/');
}

function is_current_page(string $page): bool
{
	$currentPage = basename($_SERVER['PHP_SELF']);

	return $currentPage === $page;
}

function format_date(string $date): string
{
	return date('F j, Y', strtotime($date));
}

function e(string $value): string
{
	return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function is_blog_section(): bool
{
	$currentPage = basename($_SERVER['PHP_SELF']);

	return in_array($currentPage, ['blog.php', 'article.php'], true);
}

function article_url(string $slug): string
{
	return page_url('article.php?slug=' . $slug);
}

function find_article_by_slug(array $articles, string $slug): ?array
{
	foreach ($articles as $article) {
		if ($article['slug'] === $slug) {
			return $article;
		}
	}

	return null;
}

function get_articles(): array
{
	return require __DIR__ . '/data/articles.php';
}

function get_article_categories(array $articles): array
{
	$categories = [];

	foreach ($articles as $article) {
		$category = $article['category'];

		if (!isset($categories[$category])) {
			$categories[$category] = 0;
		}

		$categories[$category]++;
	}

	ksort($categories);

	return $categories;
}