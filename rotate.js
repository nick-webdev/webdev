// JavaScript Document
// Rotate images

var imageArray = new Array(5)

imageArray[0]="images/donuts1.jpg"
imageArray[1]="images/donuts2.jpg"
imageArray[2]="images/donuts3.jpg"
imageArray[3]="images/donuts4.jpg"
imageArray[4]="images/donuts5.jpg"

var count = 1;
function rotate()
{
	if (count == 5)
		count = 0;

	var imageObject=document.getElementById('temp');
	imageObject.src=imageArray[count];
	++count;
}

function start()
{
	document.getElementById('temp').src="images/donuts1.jpg";
	setInterval('rotate()', 4000);
	
}

function date()
{
	
	var my_date=new Date();
	my_date.getDate();
}