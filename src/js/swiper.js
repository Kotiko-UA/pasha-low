import Swiper from 'swiper'
import 'swiper/css'

document.addEventListener('DOMContentLoaded', () => {
	const serviceSwiper = new Swiper('.services-swiper', {
		spaceBetween: 24,
		slidesPerView: 0,
		loop: true,
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		navigation: {
			prevEl: '.s-btn-prev',
			nextEl: '.s-btn-next',
		},
		breakpoints: {
			320: {
				slidesPerView: 4,
			},
		},
	})
	document.querySelectorAll('.s-btn-next').forEach(button => {
		button.addEventListener('click', () => serviceSwiper.slideNext())
	})

	document.querySelectorAll('.s-btn-prev').forEach(button => {
		button.addEventListener('click', () => serviceSwiper.slidePrev())
	})
	const testimonialSwiper = new Swiper('.testimonials-swiper', {
		spaceBetween: 16,
		slidesPerView: 0,
		loop: true,
		autoplay: {
			delay: 4000,
			disableOnInteraction: false,
		},
		navigation: {
			prevEl: '.t-btn-prev',
			nextEl: '.t-btn-next',
		},
		breakpoints: {
			320: {
				slidesPerView: 3,
			},
		},
	})
	document.querySelectorAll('.t-btn-next').forEach(button => {
		button.addEventListener('click', () => testimonialSwiper.slideNext())
	})

	document.querySelectorAll('.t-btn-prev').forEach(button => {
		button.addEventListener('click', () => testimonialSwiper.slidePrev())
	})
	const ourTeamSwiper = new Swiper('.our-team-swiper', {
		spaceBetween: 24,
		slidesPerView: 0,
		loop: true,
		navigation: {
			prevEl: '.o-btn-prev',
			nextEl: '.o-btn-next',
		},
		breakpoints: {
			320: {
				slidesPerView: 3,
			},
		},
	})
	document.querySelectorAll('.o-btn-next').forEach(button => {
		button.addEventListener('click', () => ourTeamSwiper.slideNext())
	})

	document.querySelectorAll('.o-btn-prev').forEach(button => {
		button.addEventListener('click', () => ourTeamSwiper.slidePrev())
	})
})
