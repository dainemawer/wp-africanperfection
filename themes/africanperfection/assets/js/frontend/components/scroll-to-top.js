const ScrollToTop = () => {
	const scrollToTop = document.getElementById('scroll-to-top');

	if (scrollToTop) {
		window.addEventListener('scroll', () => {
			if (window.pageYOffset > 100) {
				scrollToTop.classList.add('visible');
				scrollToTop.classList.add('opacity-100');
				scrollToTop.classList.remove('invisible');
				scrollToTop.classList.remove('opacity-0');
			} else {
				scrollToTop.classList.remove('visible');
				scrollToTop.classList.add('invisible');
				scrollToTop.classList.remove('opacity-100');
				scrollToTop.classList.add('opacity-0');
			}
		});

		scrollToTop.addEventListener('click', (e) => {
			e.preventDefault();
			window.scrollTo({
				top: 0,
				left: 0,
				behavior: 'smooth',
			});
		});
	}
}

export default ScrollToTop;
