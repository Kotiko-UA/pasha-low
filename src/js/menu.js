const menuRefs = {
	menuBtn: document.querySelector('[data-burger-btn]'),
	menuClBtn: document.querySelector('[data-cross-btn]'),
	menu: document.querySelector('[data-mobile-menu]'),
}

const toggleMobileMenu = () => {
	if (window.innerWidth >= 1280) {
		return
	}

	if (!menuRefs.menu.classList.contains('menu-open')) {
		openMenu()
	} else {
		closeMenu()
	}
}

const openMenu = () => {
	menuRefs.menu.classList.add('menu-open')
}

const closeMenu = () => {
	menuRefs.menu.classList.remove('menu-open')
}

menuRefs.menuBtn.addEventListener('click', toggleMobileMenu)
menuRefs.menuClBtn.addEventListener('click', toggleMobileMenu)

menuRefs.menu.addEventListener('click', e => {
	if (!e.target.matches('a')) return
	toggleMobileMenu()
})
