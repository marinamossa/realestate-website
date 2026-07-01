//mobile menu and ban scrolling
document.querySelector('#burger').onclick = function () {
	document.getElementById('header_menu').classList.toggle('burger-click')
	document.getElementById('burger').classList.toggle('active')
	document.getElementById('body').classList.toggle('fixed')
}

//dropdown menu
document.querySelector('#click-dropdown').onclick = function () {
	document.getElementById('header-dropdown').classList.toggle('dropdown-open')
}

document.addEventListener('click', function (event) {
	if (
		event.target.id != 'click-dropdown' &&
		event.target.id != 'dropdown_link'
	) {
		if (document.querySelector('.dropdown-open')) {
			document
				.getElementById('header-dropdown')
				.classList.remove('dropdown-open')
		} else {
		}
	}
})

//popup open and close
function popupOpen() {
	document.getElementById('popup_window').classList.add('popup-open')
	document.getElementById('body').classList.add('fixed')
}

document.querySelector('#popup_close_btn').onclick = function () {
	document.getElementById('popup_window').classList.remove('popup-open')
	document.getElementById('body').classList.remove('fixed')
}

//main banner slider
const moveSlider = (direction = 0) => {
	const _list = document.querySelectorAll('.main-slider-item')
	const length = _list.length

	const _activeElement = Object.values(_list)
		.map((el, index) => {
			if (el.className.indexOf('active-banner') != -1) return index
		})
		.filter(el => {
			return el !== undefined
		})

	_change_element(_list, _activeElement[0], length, direction)
}

const _change_element = (list, index, length, direction) => {
	list[index].classList.remove('active-banner')

	let _nextEl = index + 1
	if (direction == 1) {
		if (_nextEl >= length) _nextEl = 0
	} else {
		_nextEl = index - 1
		if (_nextEl < 0) _nextEl = length - 1
	}

	list[_nextEl].classList.add('active-banner')
}

//footer dropdown menu
document.querySelectorAll('.footer__menu-title').forEach(title => {
	title.addEventListener('click', function () {
		const currentDropdown = this.closest('.footer-dropdown')

		document
			.querySelectorAll('.footer-dropdown.footer-menu-open')
			.forEach(openDropdown => {
				if (openDropdown !== currentDropdown) {
					openDropdown.classList.remove('footer-menu-open')
				}
			})

		currentDropdown.classList.toggle('footer-menu-open')
	})
})

//scroll-top button
const offset = 100
const scrollUp = document.querySelector('.scroll-top')
const getTop = () => window.pageYOffset || document.documentElement.scrollTop

// onScroll
window.addEventListener('scroll', () => {
	if (getTop() > offset) {
		scrollUp.classList.add('scroll-btn-show')
	} else {
		scrollUp.classList.remove('scroll-btn-show')
	}
})

// click on scroll
scrollUp.addEventListener('click', () => {
	window.scrollTo({
		top: 0,
		behavior: 'smooth',
	})
})

// open popup after callback form submit result
const callbackParams = new URLSearchParams(window.location.search)
const callbackStatus = callbackParams.get('callback')

if (callbackStatus === 'success' || callbackStatus === 'error') {
	popupOpen()

	callbackParams.delete('callback')

	const queryString = callbackParams.toString()
	const cleanUrl =
		window.location.pathname +
		(queryString ? '?' + queryString : '') +
		window.location.hash

	window.history.replaceState({}, '', cleanUrl)
}

// clean contact form submit result from URL
const contactStatus = new URLSearchParams(window.location.search).get('contact')

if (contactStatus === 'success' || contactStatus === 'error') {
	const cleanUrl = window.location.pathname + window.location.hash

	window.history.replaceState({}, '', cleanUrl)
}

// clean quick contact form submit result from URL
const quickContactParams = new URLSearchParams(window.location.search)
const quickContactStatus = quickContactParams.get('quick_contact')

if (quickContactStatus === 'success' || quickContactStatus === 'error') {
	quickContactParams.delete('quick_contact')

	const queryString = quickContactParams.toString()
	const cleanUrl =
		window.location.pathname +
		(queryString ? '?' + queryString : '') +
		window.location.hash

	window.history.replaceState({}, '', cleanUrl)
}
