<?php require_once __DIR__ . '/partials/header.php'; ?>

			<main class="main-page">
				<div class="main-banner">
					<div class="container">
						<div class="main-slider">
							<div
								class="main-slider-item active-banner"
								id="main-slide-1"
								style="
									background-image:
										linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6)),
										url('<?= asset('img/main-slider-1.jpg'); ?>');
								">
								<div class="main-slider-item__inner">
									<span class="main-slider-item__subtitle">
										Buy apartments</span
									>
									<h1 class="main-slider-item__title">
										Welcome home <span>to</span> luxury
									</h1>
									<a
										href="<?= article_url('dubai-real-estate-market-overview'); ?>"
										class="main-slider-item__link"
										><span>Read more</span>
										<svg
											width="10"
											height="18"
											viewBox="0 0 13 22"
											fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M12.3223 11.0234L1.00031 0.998896" />
											<path d="M1 21.0234L12.322 10.9989" />
										</svg>
									</a>
								</div>
							</div>
							<div
								class="main-slider-item"
								id="main-slide-2"
								style="
									background-image:
										linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6)),
										url('<?= asset('img/main-slider-2.jpg'); ?>');
								">
								<div class="main-slider-item__inner">
									<span class="main-slider-item__subtitle">Investments</span>
									<h1 class="main-slider-item__title">
										Construction on <span>the coast</span>
									</h1>
									<a
										href="<?= article_url('dubai-real-estate-market-overview'); ?>"
										class="main-slider-item__link"
										><span>Read more</span>
										<svg
											width="10"
											height="18"
											viewBox="0 0 13 22"
											fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M12.3223 11.0234L1.00031 0.998896" />
											<path d="M1 21.0234L12.322 10.9989" />
										</svg>
									</a>
								</div>
							</div>
							<div
								class="main-slider-item"
								id="main-slide-3"
								style="
									background-image:
										linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6)),
										url('<?= asset('img/main-slider-3.jpg'); ?>');
								">
								<div class="main-slider-item__inner">
									<span class="main-slider-item__subtitle"
										>Property rental</span
									>
									<h1 class="main-slider-item__title">
										Apartments <br /><span>in Dubai</span>
									</h1>
									<a
										href="<?= article_url('dubai-real-estate-market-overview'); ?>"
										class="main-slider-item__link"
										><span>Read more</span>
										<svg
											width="10"
											height="18"
											viewBox="0 0 13 22"
											fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path d="M12.3223 11.0234L1.00031 0.998896" />
											<path d="M1 21.0234L12.322 10.9989" />
										</svg>
									</a>
								</div>
							</div>
							<div class="main-slider__nav">
								<a
									href="#"
									class="main-slider__prev"
									onclick="
										moveSlider(0)
										return false
									"
									>prev</a
								>
								<span>|</span>
								<a
									href="#"
									class="main-slider__next"
									onclick="
										moveSlider(1)
										return false
									"
									>next</a
								>
							</div>
							<div class="social-links-wrp">
								<a href="#" class="social-links">
									<svg
										class="facebook"
										width="10"
										height="18"
										viewBox="0 0 10 18"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M8.88215 9.80206L9.37504 6.64838H6.29324V4.60186C6.29324 3.73908 6.72375 2.89807 8.10399 2.89807H9.50503V0.213059C9.50503 0.213059 8.23362 0 7.01803 0C4.48007 0 2.82114 1.51047 2.82114 4.24484V6.64838H0V9.80206H2.82114V17.4259H6.29324V9.80206H8.88215Z" />
									</svg>
								</a>
								<a href="#" class="social-links">
									<svg
										class="twitter"
										width="18"
										height="16"
										viewBox="0 0 18 16"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M15.6346 4.27361C15.6457 4.44247 15.6457 4.61137 15.6457 4.78023C15.6457 9.93077 12.0522 15.8654 5.48429 15.8654C3.46084 15.8654 1.58116 15.2261 0 14.1164C0.287493 14.1526 0.563891 14.1646 0.862445 14.1646C2.53203 14.1646 4.06898 13.5495 5.29631 12.5001C3.72621 12.4639 2.41042 11.3421 1.95708 9.79811C2.17824 9.83427 2.39936 9.85841 2.63158 9.85841C2.95222 9.85841 3.2729 9.81014 3.57142 9.72575C1.93499 9.36385 0.70762 7.79578 0.70762 5.90201V5.85378C1.18305 6.14328 1.73595 6.32421 2.32193 6.3483C1.35997 5.64868 0.729743 4.45454 0.729743 3.10356C0.729743 2.37984 0.906622 1.71642 1.21624 1.13743C2.97431 3.50162 5.61695 5.04556 8.5802 5.21446C8.52493 4.92496 8.49175 4.62344 8.49175 4.32188C8.49175 2.17478 10.084 0.425781 12.0632 0.425781C13.0915 0.425781 14.0202 0.896206 14.6726 1.65613C15.4798 1.48726 16.2538 1.16157 16.9393 0.715276C16.6739 1.61996 16.11 2.37988 15.3692 2.86234C16.0879 2.77794 16.7845 2.56077 17.4258 2.25925C16.9394 3.0312 16.3312 3.71872 15.6346 4.27361Z" />
									</svg>
								</a>
								<a href="#" class="social-links">
									<svg
										class="youtube"
										width="20"
										height="15"
										viewBox="0 0 20 15"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M7.98844 10.4533V4.84149C9.98064 5.77891 11.5236 6.68449 13.3485 7.66082C11.8433 8.49553 9.98064 9.4321 7.98844 10.4533ZM19.091 2.05047C18.7474 1.59771 18.1616 1.24528 17.5381 1.1286C15.7053 0.780546 4.27099 0.779556 2.43915 1.1286C1.93911 1.22234 1.49384 1.44892 1.11133 1.80096C-0.500362 3.29686 0.00466618 11.3189 0.393147 12.6183C0.556507 13.1808 0.76769 13.5864 1.03365 13.8527C1.37631 14.2047 1.84547 14.4471 2.38436 14.5558C3.89345 14.868 11.668 15.0425 17.5062 14.6027C18.0441 14.509 18.5202 14.2588 18.8958 13.8918C20.3859 12.4019 20.2843 3.92932 19.091 2.05047Z" />
									</svg>
								</a>
								<a href="#" class="social-links">
									<svg
										class="instagram"
										width="17"
										height="18"
										viewBox="0 0 17 18"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M17 5.82992C17 4.87961 16.7888 4.35166 16.5776 3.71812C16.3665 3.19017 16.0497 2.66222 15.6273 2.23986C15.205 1.71191 14.677 1.50073 14.1491 1.28955C13.6211 1.07837 12.9876 0.972778 12.0373 0.867188C11.087 0.867188 10.7702 0.867188 8.4472 0.867188C6.22981 0.867188 5.91304 0.867188 4.96273 0.867188C4.01242 0.867188 3.48447 1.07837 2.85093 1.28955C2.32298 1.50073 1.79503 1.8175 1.37267 2.23986C0.95031 2.76781 0.63354 3.19017 0.42236 3.82371C0.21118 4.35166 0.10559 4.9852 0 5.82992C0 6.78023 0 7.097 0 9.31439C0 11.6374 0 11.9541 0 12.7989C0 13.7492 0.21118 14.2771 0.42236 14.9107C0.63354 15.4386 0.95031 15.9666 1.37267 16.3889C1.90062 16.9169 2.32298 17.1281 2.85093 17.3392C3.37888 17.5504 4.01242 17.656 4.96273 17.7616C5.91304 17.7616 6.12422 17.7616 8.4472 17.7616C10.7702 17.7616 11.087 17.7616 11.9317 17.7616C12.882 17.7616 13.4099 17.5504 14.0435 17.3392C14.5714 17.1281 15.0994 16.8113 15.5217 16.3889C16.0497 15.861 16.2609 15.4386 16.472 14.9107C16.6832 14.3827 16.7888 13.7492 16.8944 12.7989C17 11.8486 16.8944 11.6374 16.8944 9.31439C16.8944 6.99141 17 6.78023 17 5.82992ZM8.4472 13.7492C6.01863 13.7492 4.11801 11.743 4.11801 9.41998C4.11801 6.99141 6.12422 5.09079 8.4472 5.09079C10.8758 5.09079 12.7764 7.097 12.7764 9.41998C12.882 11.743 10.8758 13.7492 8.4472 13.7492ZM12.9876 5.82992C12.4596 5.82992 11.9317 5.40756 11.9317 4.77402C11.9317 4.24607 12.354 3.71812 12.9876 3.71812C13.5155 3.71812 14.0435 4.14048 14.0435 4.77402C14.0435 5.40756 13.6211 5.82992 12.9876 5.82992Z" />
										<path
											d="M11.2976 9.31565C11.2976 10.8995 10.0305 12.1666 8.44663 12.1666C6.86278 12.1666 5.5957 10.8995 5.5957 9.31565C5.5957 7.7318 6.96837 6.57031 8.44663 6.57031C10.0305 6.57031 11.2976 7.83739 11.2976 9.31565Z" />
									</svg>
								</a>
								<a href="#" class="social-links">
									<svg
										class="linkedin"
										width="19"
										height="19"
										viewBox="0 0 19 19"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M17.6522 0.761719H1.35362C0.606794 0.761719 0 1.35136 0 2.0752V17.6662C0 18.39 0.606794 18.9797 1.35362 18.9797H17.6522C18.399 18.9797 19.0101 18.39 19.0101 17.6662V2.0752C19.0101 1.35136 18.399 0.761719 17.6522 0.761719ZM5.74545 16.3771H2.92789V7.68292H5.74969V16.3771H5.74545ZM4.33667 6.4955C3.43284 6.4955 2.70299 5.79199 2.70299 4.92989C2.70299 4.06779 3.43284 3.36429 4.33667 3.36429C5.23625 3.36429 5.97035 4.06779 5.97035 4.92989C5.97035 5.79606 5.24049 6.4955 4.33667 6.4955ZM16.3071 16.3771H13.4895V12.1479C13.4895 11.1395 13.4683 9.84224 12.0256 9.84224C10.5574 9.84224 10.3325 10.9402 10.3325 12.0748V16.3771H7.51491V7.68292H10.2179V8.87034H10.2561C10.6337 8.18717 11.5545 7.46739 12.9251 7.46739C15.7766 7.46739 16.3071 9.26886 16.3071 11.6112V16.3771Z" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div>
				<section class="projects">
					<div class="container">
						<div class="projects__inner">
							<div class="projects__header">
								<h2 class="projects__title">Latest projects</h2>
								<div class="projects__nav">
									<a href="#" class="projects__nav-link active-nav-link"
										>Villas</a
									>
									<a href="#" class="projects__nav-link">Buildings</a>
									<a href="#" class="projects__nav-link">Interior</a>
									<a href="#" class="projects__nav-link view-all"
										>View all projects</a
									>
								</div>
							</div>
							<div class="project__slider">
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-1.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Villas</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-2.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Houses</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-3.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Apartments</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-1.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Villas</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-2.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Houses</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-3.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Apartments</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-1.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Villas</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-2.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Houses</span
									>
								</div>
								<div class="project__slider-item">
									<img
										class="project__slider-item-image"
										src="<?= asset('img/project-slider-2.jpg'); ?>"
										alt="Latest project" />
									<div class="project__slider-item-inner">
										<span class="project__slider-item-inner-title">Dubai</span>
										<p class="project__slider-item-inner-text">
											Lorem ipsum dolor sit amet, consectetur adipiscing elit.
											Consequat molestie integer aliquam consectetur. Faucibus
											vitae dui massa tellus magna sit.
										</p>
										<a href="#" class="project__slider-item-inner-link"
											>See project</a
										>
									</div>
									<span class="project__slider-item-title subtitle"
										>Apartments</span
									>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="expertise">
					<div class="container">
						<div class="expertise__inner">
							<div class="expertise-content">
								<span class="expertise-content__subtitle">Our expertise</span>
								<h2 class="expertise-content__title">
									"The best apartment in Dubai" we will find your dream
								</h2>
								<p class="expertise-content__text">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Suspendisse nibh massa, euismod ut libero id, blandit posuere
									augue. Morbi porta volutpat diam egestas ultrices. Phasellus
									tempus fringilla neque, nec viverra orci tristique vel. In
									efficitur vehicula magna, varius pellentesque nisl vehicula
									vel. Aenean vel sem ac elit commodo finibus in nec massa.
									Nulla facilisi. Nulla vestibulum venenatis sollicitudin. Etiam
									auctor mollis justo eu tincidunt. Aliquam varius varius
									tortor. Cras id venenatis sem. Quisque ut risus ex. Sed et
									tempor massa. Praesent ac eros hendrerit, congue justo ac,
									molestie urna. Fusce nec neque vitae dolor dapibus elementum.
									Maecenas nec orci quis sem condimentum dapibus varius a lorem.
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								</p>
							</div>
							<div class="expertise__video main-video" id="video_wrp">
								<video
									id="expert_video"
									class="main-video__file"
									src="<?= asset('video/expertise-video.mp4'); ?>"
									poster="video/expertise-video-poster.jpg"></video>
								<div class="main-video__overlay" id="video_overlay"></div>
								<button
									id="expert_video_btn"
									class="main-video__button"
									type="button">
									<svg
										width="11"
										height="14"
										viewBox="0 0 11 14"
										fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M10.5 6.13397C11.1667 6.51888 11.1667 7.48112 10.5 7.86602L1.5 13.0622C0.833332 13.4471 3.43203e-07 12.966 3.76852e-07 12.1962L8.31114e-07 1.80385C8.64763e-07 1.03405 0.833334 0.552922 1.5 0.937822L10.5 6.13397Z" />
									</svg>
								</button>
							</div>
							<div class="expertise__quote">
								<p class="expertise__quote-text">
									“Don’t limit yourself. Many people limit themselves to what
									they think they can do. You can go as far as your mind lets
									you. What you believe, remember, you can achieve.”
									<span>— Mary Kay Ash</span>
								</p>
							</div>
							<div class="expertise__article">
								<div class="expertise__article-wrp">
									<img
										class="expertise__article-img"
										src="<?= asset('img/expertise-article-1.jpg'); ?>"
										alt="expertise"
										height="312" />
									<p class="expertise__article-text">
										Sed in sem pellentesque, eleifend erat vitae, tincidunt
										turpis. Pellentesque augue elit, rutrum sit amet commodo
										vel, porta quis purus. Nullam faucibus, odio eu bibendum
										auctor, eros dolor aliquet purus, sit amet pellentesque
										neque est id tortor. In egestas, erat a dapibus dapibus, mi
										augue ornare lorem, nec pretium ligula purus nec tellus.
										Aenean a scelerisque nisi. Nullam pretium fermentum nunc,
										feugiat placerat urna rutrum eget. Nullam mattis justo
										consequat risus. Donec imperdiet enim id efficitur pharetra.
										Nam sollicitudin at est eget auctor. Ut sed ante quis nulla
										tincidunt auctor. Quisque accumsan pretium tincidunt. Etiam
										viverra ultrices est vitae suscipit. Pellentesque elementum
										purus non nisl pharetra consequat. Nunc in venenatis orci.
									</p>
								</div>
								<div class="expertise__article-wrp">
									<img
										class="expertise__article-img"
										src="<?= asset('img/expertise-article-2.jpg'); ?>"
										alt="expertise"
										height="312" />
									<p class="expertise__article-text">
										Vivamus non diam vel lorem efficitur mattis in gravida ante.
										Ut ullamcorper dapibus ante, eu tincidunt orci feugiat vel.
										Curabitur eget lectus lectus. Pellentesque malesuada, felis
										at accumsan interdum, nisl mi fermentum est, eu suscipit dui
										lorem a dui. Aliquam rhoncus risus in leo vestibulum
										efficitur. Suspendisse tortor quam, faucibus a lacinia a,
										bibendum vitae quam. Suspen disse et metus et orci rutrum
										dictum eu eu nibh. Suspendisse blandit in diam in rhoncus.
										Nam volutpat hendrerit enim, sed aliquet quam gravida at.
										Nullam dictum sagittis nisi, eu porta sem mollis eu. Nulla
										faucibus sed ipsum sed sodales. Curabitur varius iaculis
										felis, in aliquet sem suscipit quis. Ut vulputate, magna ac
										bibendum elementum, nulla magna tincidunt urna, a venenatis
										dolor arcu sed leo.
									</p>
								</div>
							</div>
						</div>
					</div>
				</section>

						<div class="contactus container" id="quick-contact-form">
						<span class="contactus__subtitle">Do you have any questions?</span>
						<h2 class="contactus__title">Contact us</h2>

						<form
							action="<?= page_url('handlers/quick-contact-form.php'); ?>"
							method="post"
							class="contactus-form">

							<input type="hidden" name="form_name" value="Quick contact form" />

							<input
								type="hidden"
								name="redirect_url"
								value="<?= e($_SERVER['REQUEST_URI'] ?? page_url('index.php')); ?>" />

							<div class="form-hidden-field">
														<label>
										Website
										<input
											type="text"
											name="website"
											tabindex="-1"
											autocomplete="off" />
									</label>
								</div>

								<div class="contactus-form__group">
									<input
										class="contactus-form__input"
										type="email"
										name="email"
										id="contact_email"
										placeholder="Enter your mail"
										maxlength="150"
										required />

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
				<section class="rec-articles container">
					<h2 class="rec-articles__title">Recommended articles</h2>
					<a href="<?= page_url('blog.php'); ?>" class="rec-articles__link-page"
						>View all articles</a
					>
					<div class="rec-articles__box">
						<div class="rec-articles__item">
							<img
								src="<?= asset('img/rec-articles-pic-1.jpg'); ?>"
								alt="article image"
								height="350" />
							<h4 class="rec-articles__item-title">
								Investment in a tourist area
							</h4>
							<div class="rec-articles__item-inner">
								<span class="rec-articles__item-date">June 23, 2024</span>
								<h4 class="rec-articles__item-inner-title">
									Investment in a tourist area in Dubai
								</h4>
								<p class="rec-articles__item-text">
									Projects for many large domestic and foreign corporations,
									enterprises in many elds such. Lorem ipsum dolor sit amet,
									consectetur adipisicing elit. Praesentium illum odio veritatis
									obcaecati id a, voluptatibus ipsam et nostrum ipsa quasi
									dolore vero doloremque eligendi impedit quam. Fuga, eaque
									eius?
								</p>
								<a
									href="<?= article_url('dubai-real-estate-market-overview'); ?>"
									class="rec-articles__item-link"
									><span> Learn more</span>
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
						<div class="rec-articles__item">
							<img
								src="<?= asset('img/rec-articles-pic-2.jpg'); ?>"
								alt="article image"
								height="350" />
							<h4 class="rec-articles__item-title">
								Discover Architecture in Dubai
							</h4>
							<div class="rec-articles__item-inner">
								<span class="rec-articles__item-date">Jule 03, 2022</span>
								<h4 class="rec-articles__item-inner-title">
									Discover Architecture
								</h4>
								<p class="rec-articles__item-text">
									Projects for many large domestic and foreign corporations,
									enterprises in many elds such. Lorem, ipsum dolor sit amet
									consectetur adipisicing elit. Est in nobis quis harum
									laudantium architecto nihil. Quaerat incidunt commodi
									voluptate delectus autem vero pariatur ab quod? At reiciendis
									porro temporibus.
								</p>
								<a
									href="<?= article_url('buying-property-in-dubai-key-tips'); ?>"
									class="rec-articles__item-link"
									><span> Learn more</span>
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
						<div class="rec-articles__item">
							<img
								src="<?= asset('img/rec-articles-pic-3.jpg'); ?>"
								alt="article image"
								height="350" />
							<h4 class="rec-articles__item-title">
								Construction on the coast
							</h4>
							<div class="rec-articles__item-inner">
								<span class="rec-articles__item-date">Jule 03, 2022</span>
								<h4 class="rec-articles__item-inner-title">
									Construction on the coast
								</h4>
								<p class="rec-articles__item-text">
									Projects for many large domestic and foreign corporations,
									enterprises in many elds such
								</p>
								<a
									href="<?= article_url('buying-property-in-dubai-key-tips'); ?>"
									class="rec-articles__item-link"
									><span> Learn more</span>
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
					</div>
				</section>
				<div class="reviews">
					<div class="reviews-slider">
						<div class="reviews-slider__item">
							<div class="reviews-slider__user-img">
								<img
									src="<?= asset('img/reviews-img1.png'); ?>"
									alt="iser avatar"
									width="112"
									height="112" />
							</div>
							<span class="reviews-slider__user-name">Paul</span>
							<p class="reviews-slider__user-info">Owner in <a>Paul.com</a></p>
							<p class="reviews-slider__review-text">
								Projects for many large domestic and foreign corporations,
								enterprises in many elds such as nance, banking, F&B, education,
								communication.
							</p>
							<span class="reviews-slider__decor">”</span>
						</div>
						<div class="reviews-slider__item">
							<div class="reviews-slider__user-img">
								<img
									src="<?= asset('img/reviews-img2.png'); ?>"
									alt="iser avatar"
									width="112"
									height="112" />
							</div>
							<span class="reviews-slider__user-name">Robert</span>
							<p class="reviews-slider__user-info">
								Founder in <a>Apple inc.</a>
							</p>
							<p class="reviews-slider__review-text">
								Founded in 2007, Sparch is specializing in providing innovative
								services such as website design, brand identity and marketing.
							</p>
							<span class="reviews-slider__decor">”</span>
						</div>
						<div class="reviews-slider__item">
							<div class="reviews-slider__user-img">
								<img
									src="<?= asset('img/reviews-img1.png'); ?>"
									alt="iser avatar"
									width="112"
									height="112" />
							</div>
							<span class="reviews-slider__user-name">Paul</span>
							<p class="reviews-slider__user-info">Owner in <a>Paul.com</a></p>
							<p class="reviews-slider__review-text">
								Projects for many large domestic and foreign corporations,
								enterprises in many elds such as nance, banking, F&B, education,
								communication.
							</p>
							<span class="reviews-slider__decor">”</span>
						</div>
						<div class="reviews-slider__item">
							<div class="reviews-slider__user-img">
								<img
									src="<?= asset('img/reviews-img2.png'); ?>"
									alt="iser avatar"
									width="112"
									height="112" />
							</div>
							<span class="reviews-slider__user-name">Robert</span>
							<p class="reviews-slider__user-info">
								Founder in <a>Apple inc.</a>
							</p>
							<p class="reviews-slider__review-text">
								Founded in 2007, Sparch is specializing in providing innovative
								services such as website design, brand identity and marketing.
							</p>
							<span class="reviews-slider__decor">”</span>
						</div>
						<div class="reviews-slider__item">
							<div class="reviews-slider__user-img">
								<img
									src="<?= asset('img/reviews-img2.png'); ?>"
									alt="iser avatar"
									width="112"
									height="112" />
							</div>
							<span class="reviews-slider__user-name">Robert</span>
							<p class="reviews-slider__user-info">
								Founder in <a>Apple inc.</a>
							</p>
							<p class="reviews-slider__review-text">
								Founded in 2007, Sparch is specializing in providing innovative
								services such as website design, brand identity and marketing.
							</p>
							<span class="reviews-slider__decor">”</span>
						</div>
						<div class="reviews-slider__item">
							<div class="reviews-slider__user-img">
								<img
									src="<?= asset('img/reviews-img2.png'); ?>"
									alt="iser avatar"
									width="112"
									height="112" />
							</div>
							<span class="reviews-slider__user-name">Robert</span>
							<p class="reviews-slider__user-info">
								Founder in <a>Apple inc.</a>
							</p>
							<p class="reviews-slider__review-text">
								Founded in 2007, Sparch is specializing in providing innovative
								services such as website design, brand identity and marketing.
							</p>
							<span class="reviews-slider__decor">”</span>
						</div>
					</div>
				</div>
				<section class="faq container">
					<h2 class="faq__title">Faq</h2>

					<div class="faq__accordion accordion">
						<details class="accordion__item">
							<summary class="accordion__question">
								The largest and oldest Quotations Page on the Web with about 30
								categories
							</summary>
							<p class="accordion__answer">
								Sed in sem pellentesque, eleifend erat vitae, tincidunt turpis.
								Pellentesque augue elit, rutrum sit amet commodo vel, porta quis
								purus. Nullam faucibus, odio eu bibendum auctor, eros dolor
								aliquet purus, sit amet pellentesque neque est id tortor. In
								egestas, erat a dapibus dapibus, mi augue ornare lorem, nec
								pretium ligula purus nec tellus. Aenean a scelerisque nisi.
								Nullam pretium fermentum nunc, feugiat placerat urna rutrum
								eget. Nullam mattis justo consequat risus. Donec imperdiet enim
								id efficitur pharetra. Nam sollicitudin at est eget auctor. Ut
								sed ante quis nulla tincidunt auctor. Quisque accumsan pretium
								tincidunt. Etiam viverra ultrices est vitae suscipit.
								Pellentesque elementum purus non nisl pharetra consequat. Nunc
								in venenatis orci.
							</p>
						</details>
						<details class="accordion__item">
							<summary class="accordion__question">
								A huge collection of inspirational quotes, thoughts of greatest
								minds in history
							</summary>
							<p class="accordion__answer">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit.
								Inventore dolore aperiam autem tenetur ratione. Neque quasi hic
								ea excepturi vero amet dolorem voluptatum atque nulla ducimus?
								Officiis dolorem commodi officia.
							</p>
						</details>
						<details class="accordion__item">
							<summary class="accordion__question">
								Quotations from the great works of literature
							</summary>
							<p class="accordion__answer">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit.
								Inventore dolore aperiam autem tenetur ratione. Neque quasi hic
								ea excepturi vero amet dolorem voluptatum atque nulla ducimus?
								Officiis dolorem commodi officia.
							</p>
						</details>
						<details class="accordion__item">
							<summary class="accordion__question">
								Read quotes and sayings from famous people in history
							</summary>
							<p class="accordion__answer">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit.
								Inventore dolore aperiam autem tenetur ratione. Neque quasi hic
								ea excepturi vero amet dolorem voluptatum atque nulla ducimus?
								Officiis dolorem commodi officia.
							</p>
						</details>
						<details class="accordion__item">
							<summary class="accordion__question">
								Collected quotes from Albert Einstein
							</summary>
							<p class="accordion__answer">
								Lorem ipsum dolor sit amet consectetur, adipisicing elit.
								Inventore dolore aperiam autem tenetur ratione. Neque quasi hic
								ea excepturi vero amet dolorem voluptatum atque nulla ducimus?
								Officiis dolorem commodi officia.
							</p>
						</details>
					</div>
				</section>
			</main>

			<?php require_once __DIR__ . '/partials/footer.php'; ?>