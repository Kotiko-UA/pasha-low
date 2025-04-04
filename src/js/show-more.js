document.addEventListener('DOMContentLoaded', () => {
	const refs = {
		knowTextWrap: document.querySelector('.know-text-wrap'),
		knowMoreButton: document.querySelector('.know-more-button'),
		knowLessButton: document.querySelector('.know-less-button'),
		aboutTextWrap: document.querySelector('.about-text-wrap'),
		aboutMoreButton: document.querySelector('.about-more-button'),
		aboutLessButton: document.querySelector('.about-less-button'),
	}

	if (
		!refs.knowTextWrap ||
		!refs.knowMoreButton ||
		!refs.knowLessButton ||
		!refs.aboutTextWrap ||
		!refs.aboutMoreButton ||
		!refs.aboutLessButton
	) {
		return
	}

	const knowMoreFunc = () => {
		refs.knowTextWrap.classList.toggle('know-show-more')
	}
	const aboutMoreFunc = () => {
		refs.aboutTextWrap.classList.toggle('about-show-more')
	}

	refs.knowMoreButton.addEventListener('click', () => {
		knowMoreFunc()
	})

	refs.knowLessButton.addEventListener('click', () => {
		knowMoreFunc()
	})
	refs.aboutMoreButton.addEventListener('click', () => {
		aboutMoreFunc()
	})

	refs.aboutLessButton.addEventListener('click', () => {
		aboutMoreFunc()
	})
})
