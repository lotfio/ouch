
/**
 * prism js plugin
 */
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

/**
 * copy on function
 */
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

// fix body height
document.body.style.height = window.innerHeight + "px";

// tab-items
var tab = document.getElementsByClassName('tab-item');

// add active and show tab content
for (let i = 0; i < tab.length; i++)
{
	tab[i].addEventListener('click', function(e){

		this.classList.add('active');

		let id       = this.getAttribute('id') + "-block";
		let tabBlock = document.getElementById(id);

		tabBlock.classList.add('show');

		cleanSiblings(tabBlock, 'show');
		cleanSiblings(this, 'active');

	});
}


/**
 *
 * @param {element} elem
 * @param {class to be toggled} cls
 */
function cleanSiblings(elem, cls)
{
	let siblings = elem.parentElement.children;

	for(let v = 0; v < siblings.length; v++)
	{
		if(siblings[v].isEqualNode(elem))
			continue;

		siblings[v].classList.remove(cls);
	}
}



/**
 * exceptions panel
 */
var col = document.getElementById('exp-column').children;

for(let i = 0; i< col.length; i++)
{
	col[i].addEventListener('click', function(){

		this.classList.add('active');
		cleanSiblings(this, 'active');
	});
}