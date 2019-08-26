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

function copy(elem) {

	var input = document.createElement('input');
    input.setAttribute('value', elem.dataset.copy);
    document.body.appendChild(input);
    input.select();
	var result = document.execCommand('copy');
	elem.innerText = "copied !";
    document.body.removeChild(input)
    return result;
}