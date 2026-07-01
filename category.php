<?php
require_once __DIR__ . '/bootstrap.php';

$pageTitle = 'Properties for Sale and Rent in Dubai — Dubai Realty';
$pageDescription = 'Browse Dubai Realty property offers in Dubai: apartments, villas, townhouses and commercial real estate for sale and rent.';
$canonical = 'category.php';
?>

<?php require_once __DIR__ . '/partials/header.php'; ?>

			<main class="category-page">
				<div
					class="category-page__banner page__banner container"
					style="background-image: url('<?= asset('img/category-banner.jpg'); ?>')">
					<div class="page__banner-inner">
						<h2 class="page__banner-title">
							Apartments <br /><span>in Dubai</span>
						</h2>
					</div>
				</div>
				<div class="breadcrumbs container">
					<a href="<?= page_url('index.php'); ?>" class="breadcrumbs-link">Main</a>
					<a href="<?= page_url('category.php'); ?>" class="breadcrumbs-link">Buy</a>
					<a href="#" class="breadcrumbs-link breadcrumbs-active" onclick="return false"
						>Apartments in Dubai</a
					>
				</div>
				<div class="category container">
					<h2 class="category__title">Apartment categories</h2>
					<div class="category__slider">
						<div
							class="category__slider-item"
							style="background-image: url('<?= asset('img/category-image-1.jpg'); ?>')">
							<h4 class="category__slider-item-title subtitle">Townhouses</h4>
							<span class="category__slider-item-text text-accent"
								>Offers in Dubai</span
							>

							<a href="<?= page_url('category.php'); ?>" class="category__slider-item-link">View list</a>
							<div class="category__slider-item-cover"></div>
						</div>
						<div
							class="category__slider-item"
							style="background-image: url('<?= asset('img/category-image-2.jpg'); ?>')">
							<h4 class="category__slider-item-title subtitle">Villas</h4>
							<span class="category__slider-item-text text-accent"
								>Offers in Dubai</span
							>

							<a href="<?= page_url('category.php'); ?>" class="category__slider-item-link">View list</a>
							<div class="category__slider-item-cover"></div>
						</div>
						<div
							class="category__slider-item"
							style="background-image: url('<?= asset('img/category-image-3.jpg'); ?>')">
							<h4 class="category__slider-item-title subtitle">Apartments</h4>
							<span class="category__slider-item-text text-accent"
								>Offers in Dubai</span
							>
							<a href="<?= page_url('category.php'); ?>" class="category__slider-item-link">View list</a>
							<div class="category__slider-item-cover"></div>
						</div>
						<div
							class="category__slider-item"
							style="background-image: url('<?= asset('img/category-image-1.jpg'); ?>')">
							<h4 class="category__slider-item-title subtitle">Commercial</h4>
							<span class="category__slider-item-text text-accent"
								>Offers in Dubai</span
							>
							<a href="<?= page_url('category.php'); ?>" class="category__slider-item-link">View list</a>
							<div class="category__slider-item-cover"></div>
						</div>
					</div>
				</div>
				<div class="offers container">
					<h2 class="offers__title">Best offers</h2>
					<div class="offers__list">
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Townhouse</span>
								<h4 class="offers__card-about-title">Arabian Ranches</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									Voluptatum ea, non eos maxime asperiores earum animi autem
									atque culpa perferendis quidem pariatur! Numquam at dolore
									doloremque maxime, fuga deserunt possimus?
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>

							<img
								src="<?= asset('img/offer-image-1.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Villa</span>
								<h4 class="offers__card-about-title">Dubai Hills Estate</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Voluptates doloremque nisi quidem itaque similique laboriosam
									eius, veniam ratione maiores porro nemo aut consequuntur ad
									modi labore facere quae ut odio. Lorem ipsum dolor sit amet
									consectetur adipisicing elit. Minus provident nam obcaecati.
									Optio aliquam, exercitationem, laborum totam modi aliquid
									accusantium ut iusto dolor ipsum explicabo sequi, inventore
									quis culpa quasi.
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-2.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image"
								height="420" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Townhouse</span>
								<h4 class="offers__card-about-title">Arabian Ranches</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									Voluptatum ea, non eos maxime asperiores earum animi autem
									atque culpa perferendis quidem pariatur! Numquam at dolore
									doloremque maxime, fuga deserunt possimus?
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-3.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Villa</span>
								<h4 class="offers__card-about-title">Dubai Hills Estate</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Voluptates doloremque nisi quidem itaque similique laboriosam
									eius, veniam ratione maiores porro nemo aut consequuntur ad
									modi labore facere quae ut odio. Lorem ipsum dolor sit amet
									consectetur adipisicing elit. Minus provident nam obcaecati.
									Optio aliquam, exercitationem, laborum totam modi aliquid
									accusantium ut iusto dolor ipsum explicabo sequi, inventore
									quis culpa quasi.
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-4.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Townhouse</span>
								<h4 class="offers__card-about-title">Arabian Ranches</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									Voluptatum ea, non eos maxime asperiores earum animi autem
									atque culpa perferendis quidem pariatur! Numquam at dolore
									doloremque maxime, fuga deserunt possimus?
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-5.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Villa</span>
								<h4 class="offers__card-about-title">Dubai Hills Estate</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Voluptates doloremque nisi quidem itaque similique laboriosam
									eius, veniam ratione maiores porro nemo aut consequuntur ad
									modi labore facere quae ut odio. Lorem ipsum dolor sit amet
									consectetur adipisicing elit. Minus provident nam obcaecati.
									Optio aliquam, exercitationem, laborum totam modi aliquid
									accusantium ut iusto dolor ipsum explicabo sequi, inventore
									quis culpa quasi.
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-6.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Townhouse</span>
								<h4 class="offers__card-about-title">Arabian Ranches</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									Voluptatum ea, non eos maxime asperiores earum animi autem
									atque culpa perferendis quidem pariatur! Numquam at dolore
									doloremque maxime, fuga deserunt possimus?
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-7.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Villa</span>
								<h4 class="offers__card-about-title">Dubai Hills Estate</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Voluptates doloremque nisi quidem itaque similique laboriosam
									eius, veniam ratione maiores porro nemo aut consequuntur ad
									modi labore facere quae ut odio. Lorem ipsum dolor sit amet
									consectetur adipisicing elit. Minus provident nam obcaecati.
									Optio aliquam, exercitationem, laborum totam modi aliquid
									accusantium ut iusto dolor ipsum explicabo sequi, inventore
									quis culpa quasi.
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-8.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Townhouse</span>
								<h4 class="offers__card-about-title">Arabian Ranches</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit.
									Voluptatum ea, non eos maxime asperiores earum animi autem
									atque culpa perferendis quidem pariatur! Numquam at dolore
									doloremque maxime, fuga deserunt possimus?
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-9.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
						<div class="offers__card">
							<div class="offers__card-about">
								<span class="offers__card-category-name">Villa</span>
								<h4 class="offers__card-about-title">Dubai Hills Estate</h4>
								<span class="offers__card-about-info"> 120m<sup>2</sup> </span>
								<p class="offers__card-about-text">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit.
									Voluptates doloremque nisi quidem itaque similique laboriosam
									eius, veniam ratione maiores porro nemo aut consequuntur ad
									modi labore facere quae ut odio. Lorem ipsum dolor sit amet
									consectetur adipisicing elit. Minus provident nam obcaecati.
									Optio aliquam, exercitationem, laborum totam modi aliquid
									accusantium ut iusto dolor ipsum explicabo sequi, inventore
									quis culpa quasi.
								</p>
								<a href="#" class="offers__card-link">Learn more</a>
							</div>
							<img
								src="<?= asset('img/offer-image-10.jpg'); ?>"
								alt="Best offer"
								class="offers__card-image" />
						</div>
					</div>
					<div class="blog__pagination paginate">
						<ul class="paginate__list">
							<li class="paginate__item previous-page not-active-pag">
								<a href="">❮</a>
							</li>
							<li class="paginate__item active-pag"><a href="">1</a></li>
							<li class="paginate__item"><a href="">2</a></li>
							<li class="paginate__item"><a href="">3</a></li>
							<li class="paginate__item more-pag"><a href="">...</a></li>
							<li class="paginate__item"><a href="">94</a></li>
							<li class="paginate__item"><a href="">95</a></li>
							<li class="paginate__item"><a href="">96</a></li>
							<li class="paginate__item next-page"><a href="">❯</a></li>
						</ul>
					</div>
				</div>
				<div class="category-page__article article-content container">
					<div class="article-content__text">
						<h2 class="article-content__title">Apartments</h2>
						<p>
							To and from, fascinated her: every pebble, ant, stick, leaf, blade
							of grass, and crack in the sidewalk was something to be picked up,
							looked at, tasted, smelled, and shaken. Everything was interesting
							to her. She knew nothing. I knew everything…been there, done that.
							She was in the moment, I was in the past. She was mindful. I was
							mindless.
						</p>
						<h4 class="article-content__subtitle">Everything along the way</h4>
						<p>
							One touch of a red-hot stove is usually all we need to avoid that
							kind of discomfort in the future. The same is true as we
							experience the emotional sensation of stress from our first
							instances of social rejection or ridicule. We quickly learn to
							fear and thus automatically avoid potentially stressful situations
							of all kinds, including the most common of all: making mistakes.
						</p>
					</div>
				</div>
						<div class="contactus container" id="quick-contact-form">
								<span class="contactus__subtitle">Do you have any questions?</span>
								<h2 class="contactus__title">Contact us</h2>

								<form action="<?= page_url('handlers/quick-contact-form.php'); ?>" method="post" class="contactus-form">

									<input type="hidden" name="form_name" value="Quick contact form" />

									<input type="hidden" name="redirect_url" value="<?= e($_SERVER['REQUEST_URI'] ?? page_url('index.php')); ?>" />

									<div class="form-hidden-field">
										<label>
											Website
											<input type="text" name="website" tabindex="-1" autocomplete="off" />
										</label>
									</div>

									<div class="contactus-form__group">
										<input class="contactus-form__input" type="email" name="email" id="contact_email" placeholder="Enter your mail" maxlength="150" required />

										<input class="contactus-form__btn" type="submit" value="Send" />
									</div>
								</form>

								<?php if (($_GET['quick_contact'] ?? '') === 'success'): ?>
								<p class="form-message form-message--success">
									Thank you! We will contact you shortly.
								</p>
								<?php elseif (($_GET['quick_contact'] ?? '') === 'error'): ?>
								<p class="form-message form-message--error">
									Please enter a valid email.
								</p>
								<?php endif; ?>
							</div>
			</main>

<?php require_once __DIR__ . '/partials/footer.php'; ?>