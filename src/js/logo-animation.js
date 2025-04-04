let ticking = false

document.addEventListener('scroll', () => {
	if (!ticking) {
		ticking = true
		requestAnimationFrame(() => {
			const section = document.querySelector('.about-section')
			const logo = document.querySelector('.logo-red-line')
			const logosA = document.querySelectorAll('.select-logo-a')

			if (!section || !logo) return

			const rect = section.getBoundingClientRect()
			const start = window.innerHeight / 2
			if (rect.top < start && rect.bottom > window.innerHeight / 2) {
				logo.classList.add('start_a_line')
				logosA.forEach(el => el.classList.add('start_a'))
			} else {
				logo.classList.remove('start_a_line')
				logosA.forEach(el => el.classList.remove('start_a'))
			}

			ticking = false
		})
	}
})
