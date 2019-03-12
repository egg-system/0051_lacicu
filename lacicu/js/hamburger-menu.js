$(document).ready(function(){
	let hamburgerMenu = '#wprmenu_menu_ul';
	let hamburgerMenuLinks = $(hamburgerMenu).find('a');
	hamburgerMenuLinks.each((index, link) => {
		$(link).on('click', () => {
			window.location.href = link.href;
			console.log(link.href);
			window.location.reload();
		});
	});
});