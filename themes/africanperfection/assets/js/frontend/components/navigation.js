const Navigation = () => {
	const menu = document.getElementById('navigation-drawer');
	const button = document.getElementById('navigation-drawer-btn');
	const overlay = document.getElementById('overlay');

	button.addEventListener('click', (e) => {
		e.preventDefault();
		menu.classList.toggle('active');
		document.body.style.overflow = 'hidden';
		overlay.classList.add('opacity-30');
		overlay.classList.remove('opacity-0');
	});

	button.addEventListener('keydown', (e) => {
		if (e.keyCode === 27) {
			e.preventDefault();
			menu.classList.toggle('active');
			document.body.style.overflow = 'auto';
			overlay.classList.add('opacity-0');
			overlay.classList.remove('opacity-30');
		}
	});

	document.addEventListener('click', (e) => {
		if (e.target !== button && !menu.contains(e.target)) {
			menu.classList.remove('active');
			document.body.style.overflow = 'auto';
			overlay.classList.add('opacity-0');
			overlay.classList.remove('opacity-30');
		}
	});

	window.addEventListener('resize', (e) => {
		if (window.innerWidth > 1024) {
			menu.classList.remove('active');
			document.body.style.overflow = 'auto';
			overlay.classList.add('opacity-0');
			overlay.classList.remove('opacity-30');
		}
	});
};

export default Navigation;
