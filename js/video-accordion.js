// video play button
const videoFile = document.querySelector('#expert_video')
const button = document.querySelector('#expert_video_btn')
const overlay = document.querySelector('#video_overlay')

if (videoFile && button && overlay) {
	button.addEventListener('click', function () {
		videoFile.play()
		videoFile.setAttribute('controls', 'controls')
		button.classList.add('hide-btn')
		overlay.style.display = 'block'
	})

	overlay.addEventListener('click', function () {
		if (videoFile.paused) {
			videoFile.play()
		} else {
			videoFile.pause()
		}
	})

	videoFile.addEventListener('pause', function () {
		overlay.style.display = 'block'
	})

	videoFile.addEventListener('play', function () {
		overlay.style.display = 'block'
	})

	videoFile.addEventListener('ended', function () {
		button.classList.remove('hide-btn')
		overlay.style.display = 'none'
		videoFile.removeAttribute('controls')
	})
}

// accordion
function onToggle(event) {
	if (event.target.open) {
		document.querySelectorAll('.faq__accordion > details[open]').forEach(el => {
			if (el === event.target) {
				return
			}

			el.open = false
		})
	}
}

document.querySelectorAll('.faq__accordion > details').forEach(el => {
	el.addEventListener('toggle', onToggle)
})
