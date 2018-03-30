// JavaScript Document

function ValidateForm()
{
	var firstName = document.getElementById("firstName");
    ValidateName(firstName);
    var lastName = document.getElementById("lastName");
    ValidateName(lastName);
	var Email = document.getElementById("email");

	if (!ValidateEmail(Email))
	{
		alert("email not valid");	
	}
	
}

function ValidateName(Name)
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

}  // end of function

function ValidateEmail(email)
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