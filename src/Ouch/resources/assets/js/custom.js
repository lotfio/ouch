Prism.plugins.NormalizeWhitespace.setDefaults({
	'remove-trailing': true,
	'remove-indent': true,
	'left-trim': true,
	'right-trim': true,
	'break-lines': 120,
	'indent': 0,
	'remove-initial-line-feed': true,
	'tabs-to-spaces': 4,
	'spaces-to-tabs': 4
});

menu = document.getElementsByClassName('menu-item');

for(var i = 0; i < menu.length; i++)
{
	menu[i].onclick = function(e)
	{
		e.preventDefault();
		
		var menuIcon =  this.children[0].children[0];
		var menuInfo =  this.parentElement.nextElementSibling;

		// turn icon up and down
		menuIcon.classList.toggle("icon-down");

		menuInfo.classList.toggle('active-info-menu');

	}
}