<div class="rec-articles__item">
	<img
		src="<?= asset($article['image']); ?>"
		alt="<?= e($article['title']); ?>"
		height="350" />

	<h4 class="rec-articles__item-title">
		<?= e($article['title']); ?>
	</h4>

	<div class="rec-articles__item-inner">
		<span class="rec-articles__item-date">
			<?= format_date($article['date']); ?>
		</span>

		<h4 class="rec-articles__item-inner-title">
			<?= e($article['title']); ?>
		</h4>

		<p class="rec-articles__item-text">
			<?= e($article['description']); ?>
		</p>

		<a
			href="<?= article_url($article['slug']); ?>"
			class="rec-articles__item-link"
		>
			<span>Learn more</span>

			<svg
				width="13"
				height="22"
				viewBox="0 0 13 22"
				fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<path d="M12.3223 11.0234L1.00031 0.998896" />
				<path d="M1 21.0234L12.322 10.9989" />
			</svg>
		</a>
	</div>
</div>