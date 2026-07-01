<div
	class="article-page__banner page__banner container"
	style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?= e(asset($currentArticle['large_image'])); ?>');"
>
	<div class="page__banner-inner">
		<div class="page__banner-meta">
			<a
                href="<?= page_url('blog.php?' . http_build_query(['category' => $currentArticle['category']])); ?>"
                class="page__banner-subtitle article-page__category-link"
            >
                <?= e($currentArticle['category']); ?>
            </a>

			<span class="page__banner-date">
				<?= format_date($currentArticle['date']); ?>
			</span>
		</div>

		<h2 class="page__banner-title">
			<?= e($currentArticle['title']); ?>
		</h2>
	</div>
</div>

<div class="article-page__content article-content container">
	<div class="breadcrumbs">
	<a href="<?= page_url('index.php'); ?>" class="breadcrumbs-link">Main</a>

	<a href="<?= page_url('blog.php'); ?>" class="breadcrumbs-link">Blog</a>

	<a
		href="<?= page_url('blog.php?' . http_build_query(['category' => $currentArticle['category']])); ?>"
		class="breadcrumbs-link"
	>
		<?= e($currentArticle['category']); ?>
	</a>

	<a href="#" class="breadcrumbs-link breadcrumbs-active" onclick="return false">
		<?= e($currentArticle['title']); ?>
	</a>
    </div>

	<div class="article-content__body">
		<div class="article-content__text">
			<p>
				<?= e($currentArticle['description']); ?>
			</p>

			<p>
				Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti
				fuga, hic ipsa fugit dicta, esse distinctio id, error quibusdam
				atque blanditiis dolorum quia voluptatum? Itaque excepturi
				repudiandae quas impedit sapiente.
			</p>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto,
				id sunt? Id suscipit temporibus optio nisi odit totam itaque, minima
				eos natus accusamus quia labore cupiditate exercitationem.
			</p>

			<div class="article-content__quote">
				<span class="article-content__quote-decor">”</span>
				<p class="article-content__quote-text">
					Our greatest weakness lies in giving up. The most certain way to
					succeed is always to try just one more time.
				</p>
				<span class="article-content__quote-author">Paul</span>
				<span class="article-content__quote-info">Elite Author</span>
			</div>

			<p>
				Lorem ipsum dolor sit, amet consectetur adipisicing elit. Animi
				provident porro maxime iusto nulla ullam quaerat saepe tempora
				magnam, sed delectus atque.
			</p>
		</div>

		<img
			class="article-content__image"
			src="<?= asset($currentArticle['large_image']); ?>"
			alt="<?= e($currentArticle['title']); ?>" />

		<div class="article-content__text">
			<h4 class="article-content__subtitle">Methods for Everyone</h4>

			<p>
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis vero
				iusto earum dolorum animi harum inventore autem quisquam ad itaque.
			</p>

			<p>
				Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum
				blanditiis nemo qui. Ut quisquam, ex, eum consectetur dolorum quidem
				cum quos laudantium saepe aliquam.
			</p>
		</div>

		<?php if (!empty($currentArticle['gallery'])): ?>
			<div class="article-page__image-wrp">
				<?php foreach ($currentArticle['gallery'] as $index => $image): ?>
                    <img
                        src="<?= asset($image); ?>"
                        alt="<?= e($currentArticle['title'] . ' image ' . ($index + 1)); ?>" />
                <?php endforeach; ?>
			</div>
		<?php endif; ?>

		<div class="article-content__text">
			<h4 class="article-content__subtitle">Challenge</h4>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi
				voluptate non, aliquid ab eligendi dolorem quam cumque voluptatibus?
				Praesentium doloribus sit perferendis iste ea laborum.
			</p>

			<h5 class="article-content__subtitle">Everything along the way</h5>

			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque
				pariatur facere provident fugit ex, non natus quis placeat esse
				laboriosam.
			</p>
		</div>
	</div>

	<?php require __DIR__ . '/recommended-articles.php'; ?>
</div>