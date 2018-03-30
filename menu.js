// JavaScript Document
// Menu javascript for the drop down

var isShowing = false; // flate to see if the drop down is visible
var menu = null;   // the stub holding the menu Item we'll load this later

function show(id)
{
	hide();
	menu = document.getElementById(id);	
	if (menu != null)
	{
		menu.style.visibility = 'visible';
		isShowing = true;
	}
}


function hide()
{
	if (isShowing) {menu.style.visibility = 'hidden';}
	isShowing = false;
}