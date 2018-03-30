function ValidateOrder()
{
	var firstName = document.getElementById("firstName");
    Validatename(firstName);
    var lastName = document.getElementById("lastName");
    Validatename(lastName);
	var email = document.getElementById("email");
    Validatemail(email);
    var phone = document.getElementById("phone");
    ValidatePhone(phone);
    ValidateTexts();

}

function Validatename(Name)
{
	
	var p = Name.value.search(/^[-'\w\s]+$/);
    if (p == 0)
	{	
        return true;
	}
    else
	{
	    alert("Name Not Valid");	
        return false;
	}

}

function Validatemail(email)
{
    var p = email.value.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
    {
        return false;
        alert("Email Not Valid");
    }
}

function ValidatePhone(phone)
{
    var p = phone.value.search(/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/);
    if (p == 0)
        return true;
    else
    {
        return false;
        alert("Address Not Valid");
    }
}
 
function ValidateTexts()
{
    var count = 0;
    var home = document.getElementById("h");
    if (home.length > 0)
        count = count + 1;    
    var glaze = document.getElementById("g");
    if (glaze.length > 0)
        count = count + 1;
    var choc = document.getElementById("c");
    if (choc.length > 0)
        count = count + 1;
    var van = document.getElementById("v");
    if (van.length > 0)
        count = count + 1;    
    var crm = document.getElemebtById("f");
    if (crm.length > 0)
        count = count + 1;
    
    if (count == 0)
        alert("No product selected");
}