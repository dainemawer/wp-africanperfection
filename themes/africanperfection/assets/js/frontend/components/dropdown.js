const DropDown = () => {
	const dropdowns = document.querySelectorAll('.menu-item-has-children > a');

	dropdowns.forEach((dropdown) => {
		dropdown.addEventListener('click', (e) => {
			e.preventDefault();
			dropdown.parentElement.classList.toggle('active');
		});

		dropdown.addEventListener('keydown', (e) => {
			if (e.keyCode === 27) {
				e.preventDefault();
				dropdown.parentElement.classList.toggle('active');
			}
		});

		document.addEventListener('click', (e) => {
			if (!dropdown.parentElement.contains(e.target)) {
				dropdown.parentElement.classList.remove('active');
			}
		});
	});
};

export default DropDown;
